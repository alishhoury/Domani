import React, { useState, useEffect } from "react";
import axios from 'axios';
import SideBar from "../../components/shared/Sidebar";
import Card from "../../components/shared/Card";
import './styles.css';

const Home = ({}) =>{
    const [capsules, setCapsules] = useState([]);

    useEffect(() => {
        const fetchCapsules = async () => {
            try {
                const res = await axios.get('http://127.0.0.1:8000/api/UserCapsules', {
                    headers: { Authorization: `Bearer ${localStorage.getItem('token')}` }
                });
                setCapsules(res.data.payload);
            } catch (err) {
                console.error(err);
            }
        };
        fetchCapsules();
    }, []);

    return (
        <div className="Private-page">
            <SideBar />
            <div className="content">
                {capsules.map(capsule => (
                    <Card key={capsule.id} capsule={capsule} />
                ))}
            </div>
        </div>
    );
};
export default Home;