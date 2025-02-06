<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TendersController extends Controller
{
    public function search(Request $request)
    {
        $data=$request->all();
        DB::enableQueryLog();
        $page =(int)$request->page; // Default page is 1
        $perPage = 16; // Number of results per page
        $skip = ($page - 1) * $perPage;
        $match=[];
        // $query=DB::table('tenders');
        if(isset($data['search']))
             $match['$text']['$search']=$data['search'];
        $stages=[];
        if(!empty($match))
           $stages[]=['$match'=>$match];
        $stages[]=['$sort' => ['EnteryDate' => -1]];
        $stages[]=['$project'=>['CountryId'=>1,'RefId'=>1,'WorkDesc'=>1,'SubmDate'=>1,'EnteryDate'=>1,'SectorID'=>1]];
        $stages[]=['$skip' => $skip];
        $stages[]=['$limit' => $perPage];
        $data=DB::table('tenders')->raw()->aggregate($stages,['allowDiskUse'=>true,...def_pipeline_option()])->toArray();
        $result=['hasMorePages'=>false,'data'=>[]];
        foreach ($data as $key => $val) {
             if($key==15){
                $result['hasMorePages']=true;
                continue;
             }
             $result['data'][]=[
                'id'=>(string)$val['_id'],
                'CountryId'=>$val['CountryId'],
                'RefId'=>$val['RefId'],
                'WorkDesc'=>$val['WorkDesc'],
                'closingDate'=>Carbon::parse($val['SubmDate'])->format('d M Y'),
                'entryDate'=>Carbon::parse($val['EnteryDate'])->format('d M Y'),
                'SectorID'=>$val['SectorID'],
             ];
        }
        // dd($result,DB::getQueryLog());
        return response(['suceess'=>true,'data'=>$result]);
    }
    public function getFiltersData()
    {
         $data=[];
         $data['countries']=DB::table('countries')->get(['Name','CountryID']);
         $sectors = DB::table('sectors')->raw(function($collection) {
            return $collection->aggregate([
                [
                    '$group' => [
                        '_id' => '$ID',
                        'doc' => ['$first' => '$$ROOT']
                    ]
                ],
                [
                    '$replaceRoot' => ['newRoot' => '$doc']
                ]
            ],def_pipeline_option())->toArray();
          });
         $data['sectors']=$sectors;
         return response(['success'=>true,'data'=>$data]);
    }
}
