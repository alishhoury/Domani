import "../aside.css"
import logo from "../../../assets/title-white.svg"
import Button from "../../shared/Button";



const Aside = ({ toggle }) =>{
return (
    <div>
        <aside>
            <img src={logo} alt="Domani" />
                <div className="switch-content">

                    <h2>Don't have an account!</h2>
                    <p>write a message to the future.</p>
                    
                    <Button text= {"Sign up"} className={"switch-content-button"} onClickListener={toggle}/>
            
                </div>
        </aside>
    </div>
)
}
export default Aside;