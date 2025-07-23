import "../styles.css"
import SignUpForm from "./SignUpForm";
import Aside from "./aside";



const SignUpPage = ({}) =>{
return (
    <div className="Auth-page">
        <Aside/>
        <div className="centering">
            <SignUpForm/>
        </div>
    </div>
)
}
export default SignUpPage;