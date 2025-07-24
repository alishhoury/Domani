import React from "react";
import { useNavigate } from 'react-router-dom';
import "./styles.css";
import title from "../../../assets/title.svg";
import Home from "../../../assets/home.svg";
import Create from "../../../assets/create.svg";
import Private1 from "../../../assets/private.svg";
import Profile from "../../../assets/profile.svg";
import line from "../../../assets/Line.svg";
import Logout from "../../../assets/logout.svg";

const SideBar = ({}) => {
    const navigate = useNavigate();

      const home = () => {
        navigate('/home');
  };

      const create = () => {
        navigate('/create');
  };

      const private1 = () => {
        navigate('/private');
  };

      const profile = () => {
         navigate('/profile');
  };

      const logout = () => {
         navigate('/');
  };

    return (
        <div className="SideBar">

            <div class="bar-content">
                <img src={title} alt="Domani" />

                <img src={Home} alt="home" onClick={home}/>
                <img src={Create} alt="create" onClick={create}/>
                <img src={Private1} alt="private" onClick={private1}/>
                <img src={Profile} alt="profile" onClick={profile}/>
                <img src={Logout} alt="logout" onClick={logout}/>


            </div>
                <img class="line" src={line} alt="line" />

        </div>
    )
}

export default SideBar;