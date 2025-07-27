import { useState } from "react";
import "./styles.css";
import Audio from "../../assets/AddPicture.svg"
import Picture from "../../assets/AddAudio.svg"
import EmailIcon from "../../assets/email.svg"


const PostCreationForm = () =>{
//   const [mood, setMood] = useState(null);
  const [isPrivate, setIsPrivate] = useState();
  const [isSurprise, setIsSurprise] = useState();
//   const [message, setMessage] = useState('');
//   const [media, setMedia] = useState(null);
//   const [mediaType, setMediaType] = useState(null); 
//   const [lockUntil, setLockUntil] = useState('');


return(
    <div className="create-post-form">
        <div className="create-post-container">

                <div className="mood">
                    <p className="text">Mood:</p>
                    <p className="happy">😊</p>
                    <p className="sad">😔</p>
                    <p className="nervous">😫</p>
                    <p className="excited">🤩</p>
                </div>

                <div className="tags">
                    <label>
                        <p>Private Mode</p>
                        <input
                            type="checkbox"
                            checked={isPrivate}
                            />
                    </label>
                    <label>
                        <p>Surprize Mode</p>
                        <input
                            type="checkbox"
                            checked={isSurprise}
                            />
                    </label>
                </div>
                <div className="message">
                    <input
                        type="text"
                        placeholder="Send a message across the timeline..."
                        />
                </div>
                <div className="media">
                     <img src={Picture} alt="AddPicture" />
                     <img src={Audio} alt="AddPicture" />
                </div>
                <div className="reveal-date">
                    <label for="Lock until:">Lock until:</label>
                    <input type="date" />
                </div>
                <div className="buttons">
                    <button>create</button>
                    <button>cancel</button>
                </div>


        </div>

    </div>


    )
}
export default PostCreationForm;