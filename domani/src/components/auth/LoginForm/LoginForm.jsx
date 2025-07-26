import "../form.css"
import { useEffect, useState } from "react";
import Button from "../../shared/Button";
import Input from "../../shared/Input" ;
import SocialButtons from "../../shared/socials"
import EmailIcon from "../../../assets/email.svg"
import PasswordIcon from "../../../assets/password.svg"
import axios from 'axios';
import { useNavigate } from "react-router-dom";


const LoginForm = ({}) =>{
  const [email, setEmail] = useState();
  const [password, setPassword] = useState();
  const [errorMessage, setErrorMessage] = useState("");

  const navigate = useNavigate();

return (
    <div className="form-container">
        <div className="form">
            <h1 className="auth-title">Welcome, Back!</h1>
            <SocialButtons/>

            <Input name={"email"} 
                   onChangeListener={(e) => {
                       setEmail(e.target.value)
                    }}
                    hint={"Email"}
                    icon={<img src={EmailIcon} alt="email" />} />


            <Input name={"password"}
                   hint={"Password"}
                   onChangeListener={(e) => {
                    setPassword(e.target.value)
                   }}
                   icon={<img src={PasswordIcon} alt="password"  />} />

            <Button 
            text={"Login"}
            onClickListener={async () => {
                try{
                    setErrorMessage("")
                    console.log(email, password);
                    const res = await axios.post("http://127.0.0.1:8000/api/guest/login", {
                    email: email,
                    password: password
                    });
    
                    const token = res.data.payload.token
                    localStorage.setItem("token", token);
                    navigate("/home");
                }catch (error){
                    console.error("Registration failed:", error)
                    setErrorMessage("Login failed. Please check your email or password.");

                }
            }} />
            
            {errorMessage && (
                    <p class ="error-message">{errorMessage}</p>
                )}



        </div>
    </div>
)
}
export default LoginForm;