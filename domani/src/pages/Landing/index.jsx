import React from 'react';
import { useNavigate } from 'react-router-dom';
import "./styles.css";
import Title from "../../assets/title.svg"
import Hero from "../../assets/hero.png"

const Landing = ({}) => {
  const navigate = useNavigate();

  const GetStarted = () => {
    navigate('/Auth');
  };

  return (
    <div className="landing-page">
        <hero>
            <div class="asside">
                <img class="Title" src={Title} alt = "Domani"/>
                <h1>Send your heart<br/> into tommorrow</h1>
                <p>For the things that can’t be said today,<br/>
                    save a message in a time capsule<br/>
                    to be unlocked in the future. </p>
                <button onClick={GetStarted}>Get Started</button>
            </div>

            <div>
                <img class="capsule" src={Hero} alt = "Domani"/>
            </div>
        </hero>
        <footer>

            <h4>DOMANI Because not all messages are meant for today</h4>
            <p>&copy; 2025 Domani. All rights reserved.</p>


        </footer>
    </div>
  );
}

export default Landing;