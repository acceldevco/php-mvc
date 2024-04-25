import "./style.css";
import "./context/Store";
import router from "./router/router";
export const Render = () => {
  APP.innerHTML = router[location.pathname].element();

};
Render();