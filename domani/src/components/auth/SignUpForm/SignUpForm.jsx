import "../form.css"
import Button from "../../shared/Button";
import Input from "../../shared/Input" ;
import SocialButtons from "../../shared/socials"
import NameIcon from "../../../assets/name.svg"
import EmailIcon from "../../../assets/email.svg"
import PasswordIcon from "../../../assets/password.svg"
import { useEffect, useState } from "react";
import { useNavigate } from "react-router-dom";
import axios from 'axios';


const SignUpForm = ({}) =>{
    const [name, setName] = useState();
    const [email, setEmail] = useState();
    const [password, setPassword] = useState();

    const navigate = useNavigate();

return (
    <div className="form-container">
        <div className="form">
            <h1 className="auth-title">First time here!!</h1>
            <SocialButtons/>

            <Input name={"name"} hint={"name"} icon={<img src={NameIcon} alt="password" />} 
                onChangeListener={(e) => {
                    setName(e.target.value)
                }}/>

            <Input name={"email"} hint={"Email"} icon={<img src={EmailIcon} alt="email" />} 
                onChangeListener={(e) =>{
                    setEmail(e.target.value)
                }}
            />
            <Input name={"password"} hint={"Password"} icon={<img src={PasswordIcon} alt="password" />} 
                onChangeListener={(e) =>{
                    setPassword(e.target.value)
                }}/>

            <Button text={"Sign up"} 
                onClickListener={async () =>{
                    console.log(name, email, password)
                    const response = await axios.post("http://127.0.0.1:8000/api/guestregister", {
                        name: name,
                        email: email,
                        password: password
                    })
                    
                        const token = response.data.authorisation.token;
                        localStorage.setItem("token", token);
                        navigate("/Home");
                }}/>
        </div>
    </div>
)
}
export default SignUpForm;