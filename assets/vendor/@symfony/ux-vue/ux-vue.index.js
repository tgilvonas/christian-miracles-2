/**
 * Bundled by jsDelivr using Rollup v2.79.2 and Terser v5.39.0.
 * Original file: /npm/@symfony/ux-vue@2.30.0/dist/register_controller.js
 *
 * Do NOT use SRI with dynamically generated files! More information: https://www.jsdelivr.com/using-sri-with-dynamic-files
 */
import{defineAsyncComponent as e}from"vue";function o(o){const n=o.keys().reduce(((e,o)=>(e[o]=void 0,e)),{});window.resolveVueComponent=t=>function(t){const r=`./${t}.vue`;if(!(r in n)){const e=Object.keys(n).map((e=>e.replace("./","").replace(".vue","")));throw new Error(`Vue controller "${t}" does not exist. Possible values: ${e.join(", ")}`)}if(void 0===n[r]){const i=o(r);if(i.default)n[r]=i.default;else{if(!(i instanceof Promise))throw new Error(`Vue controller "${t}" does not exist.`);n[r]=e((()=>new Promise(((e,o)=>{i.then((n=>{n.default?e(n.default):o(new Error(`Cannot find default export in async Vue controller "${t}".`))})).catch(o)}))))}}return n[r]}(t)}export{o as registerVueControllerComponents};export default null;
