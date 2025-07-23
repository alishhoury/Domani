import "../styles.css"
import Button from "../../shared/Button";
import Input from "../../shared/Input" ;
import SocialButtons from "../../shared/socials"
import NameIcon from "../../../assets/name.svg"
import EmailIcon from "../../../assets/email.svg"
import PasswordIcon from "../../../assets/password.svg"

const SignUpForm = ({}) =>{
return (
    <div className="signup-form-container">
      <div className="signup-form">
        <h1 className="auth-title">Create Account</h1>
        <SocialButtons/>

        <Input name={"name"} hint={"Name"} icon={<img src={NameIcon} alt="name" />} />
        <Input name={"email"} hint={"Email"} icon={<img src={EmailIcon} alt="email" />} />
        <Input name={"password"} hint={"Password"} icon={<img src={PasswordIcon} alt="password" />} />

        <Button text={"Sign Up"} />
      </div>
    </div>
)
}
export default SignUpForm;
