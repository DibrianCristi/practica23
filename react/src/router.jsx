//router.jsx
import { createBrowserRouter } from "react-router-dom";
import Login from "./views/Login";
import Register from "./views/Register";
import Electrica from "./views/Electrica";
import Instrumente from "./views/Intrumente";
import Suruburi from "./views/Suruburi";
import Santehnica from "./views/Santehnica";
import Uzcasnic from "./views/Uzcasnic";
import Home from "./views/Home";
import Dashboard from "./views/Dashboard";
import Shoppingcart from "./views/Shoppingcart";
import Notfound from "./views/Notfound";


const router = createBrowserRouter([
    {
        path: '/',
        element: <Home/>
    },
    {
        path: '/login',
        element: <Login></Login>
    },
    {
        path: '/register',
        element: <Register/>
    },
    {
        path: '/dashboard',
        element: <Dashboard/>
    },
    {
        path: '/cart',
        element: <Shoppingcart/>
    },
    {
        path: '/electrica',
        element: <Electrica/>
    },
    {
        path: '/instrumente',
        element: <Instrumente/>
    },
    {
        path: '/suruburi',
        element: <Suruburi/>
    },
    {
        path: '/santehnica',
        element: <Santehnica/>
    },
    {
        path: '/uzcasnic',
        element: <Uzcasnic/>
    },
    {
        path: '*',
        element: <Notfound/>
    },
])

export default router;