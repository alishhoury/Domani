import "../styles.css"
import LoginForm from "./LoginForm";
import Aside from "./aside";



const LoginPage = ({}) =>{
return (
    <div className="Auth-page">
        <Aside/>
        <div className="centering">
            <LoginForm/>
        </div>
    </div>
)
}
export default LoginPage;