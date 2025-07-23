import Button from "../../shared/Button";
import Input from "../../shared/Input" ;
import SocialButtons from "../../shared/socials"
import "./styles.css"

const SignUpForm = ({}) =>{
return (
    <div className="signup-form-container">
      <div className="signup-form">
        <h1 className="auth-title">Create Acount</h1>
        <SocialButtons/>

        <Input name={"name"} hint={"Name"} />
        <Input name={"email"} hint={"Email"} />
        <Input name={"password"} hint={"Password"} />

        <Button text={"Sign Up"} />
      </div>
    </div>
)
}
export default SignUpForm;
