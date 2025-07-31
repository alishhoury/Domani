import { useState } from "react";
import "./styles.css";
import Audio from "../../assets/AddPicture.svg"
import Picture from "../../assets/AddAudio.svg"
import axios from 'axios';


const PostCreationForm = () =>{
  const [mood, setMood] = useState(null);
  const [isPrivate, setIsPrivate] = useState(false);
  const [isSurprise, setIsSurprise] = useState(false);
  const [message, setMessage] = useState('');
  const [media, setMedia] = useState(null);
  const [mediaType, setMediaType] = useState(null); 
  const [lockUntil, setLockUntil] = useState('');


  const convertToBase64 = (file) => {
    return new Promise((resolve) => {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = () => resolve(reader.result.split(',')[1]);
    })
  }

   const handleMedia = async (event, type) => {
        const file = event.target.files[0];
        const base64 = await convertToBase64(file);
        setMedia(base64)
        setMediaType(type)
   }
   const handleSubmit = async () => {

    const postData = {
        mood:mood,
        private_mode: isPrivate ? 1:0,
        surprize_mode: isSurprise ? 1:0,
        message: message,
        media: media,
        media_type: mediaType,
        reveal_at: lockUntil
    };
        const token = localStorage.getItem("token")
        const response = await axios.post("http://127.0.0.1:8000/api/create", postData,{
        headers: {
            'Authorization': `Bearer ${token}`,
        }
    });
        console.log('Post created successfully:');
        resetForm();
   }
    const resetForm = () => {
        setMood(null);
        setIsPrivate(false);
        setIsSurprise(false);
        setMessage('');
        setMedia(null);
        setMediaType(null);
        setLockUntil('');
  };




return(
    <div className="create-post-form">
        <div className="create-post-container">

                <div className="mood">
                    <p className="text">Mood:</p>
                    <p className="happy" onClick={() => setMood('happy')}>😊</p>
                    <p className="sad" onClick={() => setMood('sad')}>😔</p>
                    <p className="nervous" onClick={() => setMood('nervous')}>😫</p>
                    <p className="excited" onClick={() => setMood('excited')}>🤩</p>
                </div>

                <div className="tags">
                    <label>
                        <p>Private Mode</p>
                        <input
                            type="checkbox"
                            checked={isPrivate}
                            onChange={(e) => setIsPrivate(e.target.checked)}
                            />
                    </label>
                    <label>
                        <p>Surprize Mode</p>
                        <input
                            type="checkbox"
                            checked={isSurprise}
                            onChange={(e) => setIsSurprise(e.target.checked)}
                            />
                    </label>
                </div>
                <div className="message">
                    <input
                        type="text"
                        placeholder="Send a message across the timeline..."
                        value={message}
                        onChange={(e) => setMessage(e.target.value)}
                        />
                </div>
                <div className="media">
                    <label>
                        <img src={Picture} alt="AddPicture" />
                        <input type="file" accept="audio/*" onChange={(e) => handleMedia(e, 'audio')} />                    
                    </label>
                    <label>
                        <img src={Audio} alt="AddPicture" />
                        <input type="file" accept="image/*" onChange={(e) => handleMedia(e, 'image')} />
                    </label>
                </div>
                <div className="reveal-date">
                    <label for="Lock until:">Lock until:</label>
                    <input type="date" value={lockUntil} onChange={(e) => setLockUntil(e.target.value)} />
                </div>
                <div className="buttons">
                    <button className="button-create" onClick={handleSubmit}>create</button>
                    <button className="button-create" onClick={resetForm}>cancel</button>
                </div>


        </div>

    </div>


    )
}
export default PostCreationForm;