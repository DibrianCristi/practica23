import { Link } from "react-router-dom";

export default function Home(){
    return (
        <>
        <h1>Home</h1>
        <p><Link to={'/login'}>Login</Link></p>
        <p><Link to={'/register'}>Register</Link></p>
        <p><Link to={'/dashboard'}>Dashboard</Link></p>
        <p><Link to={'/cart'}>Shopping Cart</Link></p>
        <p><Link to={'/electrica'}>Electrica</Link></p>
        <p><Link to={'/suruburi'}>Suruburi</Link></p>
        <p><Link to={'/instrumente'}>Instrumente</Link></p>
        <p><Link to={'/santehnica'}>Santehnica</Link></p>
        <p><Link to={'/uzcasnic'}>Uzcasnic</Link></p>
        </>
    )
}
