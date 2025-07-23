import React from 'react';
import { useNavigate } from 'react-router-dom';
import "./styles.css";
import Title from "../../assets/title.svg"
import Hero from "../../assets/hero.png"

const Landing = ({}) => {
  const navigate = useNavigate();

  const handleGetStarted = () => {
    navigate('/Auth');
  };

  return (
    <div className="landing-page">
      <main className="main-content">
        <div className="hero">
          <div className='content'>
            <img src={Title} alt="Domani" />
            <h1>Send your heart <br />into tomorrow</h1>
            <p>For the things that can't be said today,
                <br />
                save a message in a time capsule
                <br />
                to be unlocked in the future. 
            </p>
            <button className='get-started-button' onClick={handleGetStarted}>
              Get Started
            </button>
          </div>
        </div>
        <div className="hero-image">
          <img className='capsule' src={Hero} alt="Domani"/>
        </div>
      </main>

      <footer>
        <div className="footer-content">
          <div className="message">
            <h4>DOMANI</h4>
            <p>Because not all messages are meant for today</p>
          </div>
          <p className="copyright">&copy; 2025 Domani, All rights reserved</p>
        </div>
      </footer>
    </div>
  );
}

export default Landing;