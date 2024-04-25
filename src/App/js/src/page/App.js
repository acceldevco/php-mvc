import { Render } from "../main";

export default (props) => {
    setTimeout(()=>{
        ADD.onclick = function () {
            console.log(props);
            window.data.id += 1;
            Render();
          };
    },0.000000000000001)

  
  return `<div id="FF">
  ${window.data.id}
  <button id="ADD">dasdasd</button>
  <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank">
   
  </a>
  <h1>Hello Vite!</h1>
  <div class="card">
    <button id="counter" type="button"></button>
  </div>
  <p class="read-the-docs">
    Click on the Vite logo to learn more
  </p>
</div>`;
};
