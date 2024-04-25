import App from "../page/App";
import Register from "../page/Auth/Register";

export default {
    '/':{
      element:()=>App()
    },
    '/register':{
      element:()=>Register()
    }
}