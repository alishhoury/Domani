import "../form.css"
import Button from "../../shared/Button";
import Input from "../../shared/Input" ;
import SocialButtons from "../../shared/socials"
import NameIcon from "../../../assets/name.svg"
import EmailIcon from "../../../assets/email.svg"
import PasswordIcon from "../../../assets/password.svg"

const LoginForm = ({}) =>{
return (
    <div className="form-container">
        <div className="form">
            <h1 className="auth-title">First time here!!</h1>
            <SocialButtons/>

            <Input name={"name"} hint={"name"} icon={<img src={NameIcon} alt="password" />} />
            <Input name={"email"} hint={"Email"} icon={<img src={EmailIcon} alt="email" />} />
            <Input name={"password"} hint={"Password"} icon={<img src={PasswordIcon} alt="password" />} />

            <Button text={"Sign up"} />
        </div>
    </div>
)
}
export default LoginForm;