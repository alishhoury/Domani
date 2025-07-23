import React from "react";
import "./styles.css";
import title from "../../../assets/title.svg";
import home from "../../../assets/home.svg";
import create from "../../../assets/create.svg";
import private1 from "../../../assets/private.svg";
import profile from "../../../assets/profile.svg";
import line from "../../../assets/Line.svg";

const SideBar = ({}) => {
    return (
        <div className="SideBar">

            <div class="bar-content">
                <img src={title} alt="Domani" />

                <img src={home} alt="home" />
                <img src={create} alt="create" />
                <img src={private1} alt="private" />
                <img src={profile} alt="profile" />

            </div>
                <img class="line" src={line} alt="line" />

        </div>
    )
}

export default SideBar;