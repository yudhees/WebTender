/* eslint-disable */
/*eslint no-extra-boolean-cast: ["error", {"enforceForLogicalOperands": true}]*/
import { customRef } from 'vue'

export function useDebouncedRef(value, delay = 200) {
  let timeout
  return customRef((track, trigger) => {
    return {
      get() {
        track()
        return value
      },
      set(newValue) {
        clearTimeout(timeout)
        timeout = setTimeout(() => {
          value = newValue
          trigger()
        }, delay)
      }
    }
  })
}
export const debounce= {
    beforeMount(el, binding) {
      let timeout;
      const debounceTime = binding.value??500; // Default debounce time of 500ms
      const modifiers=binding.modifiers??{}
      el.addEventListener('input', function () {
        clearTimeout(timeout);
        timeout = setTimeout(() => {
          if(modifiers.lowercase){
            el.value=el.value?.toLowerCase()
          }
          el.dispatchEvent(new Event('change'));
        }, debounceTime);
      });
    },
}
