import "../styles.css"
import SignUpForm from "./SignUpForm";
import Aside from "./aside";



const SignUpPage = ({ toggle, isLogin, setIsLogin }) =>{
return (
    <div className="Auth-page">
        <Aside 
            toggle={toggle}
            isLogin={isLogin}
            setIsLogin={setIsLogin}
        />
        <div className="centering">
            <SignUpForm/>
        </div>
    </div>
)
}
export default SignUpPage;