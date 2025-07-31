import "../styles.css"
import LoginForm from "./LoginForm";
import Aside from "./aside";



const LoginPage = ({ toggle }) =>{
return (
    <div className="Auth-page">
        <Aside toggle={toggle}/>
        <div className="centering">
            <LoginForm/>
        </div>
    </div>
)
}
export default LoginPage;