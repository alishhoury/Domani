import "../aside.css"
import logo from "../../../assets/title-white.svg"
import Button from "../../shared/Button";



const Aside = ({ toggle }) =>{
return (
    <div>
        <aside>
            <img src={logo} alt="Domani" />
                <div className="switch-content">

                    <h2>Welcome Back!</h2>
                    <p>Every word you’ve saved still matters.</p>
                    
                    <Button text= {"Login"} className={"switch-content-button"} onClickListener={toggle}/>
            
                </div>
        </aside>
    </div>
)
}
export default Aside;