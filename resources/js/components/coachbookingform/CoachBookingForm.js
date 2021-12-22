
import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom';
import { MultiSelect } from 'primereact/multiselect';
import { SelectButton } from 'primereact/selectbutton';
import { InputText } from 'primereact/inputtext';


const CoachBookingForm = () => {

 
    const [topcs, setTopics] = useState(null);
    const [session, setSession] = useState(null);
    const sessions = [
        { id: 1, name: '1 Sessions', cost: 75  },
        { id: 2, name: '2 Sessions', cost: 150 },
        { id: 3, name: '3 Sessions', cost: 250 },
        { id: 4, name: '5 Sessions', cost: 350 },
        { id: 5, name: '10 Sessions', cost: 600},
    ];

    const topics = [
        { id: 1, name: 'Resume review', cost: 50 },
        { id: 2, name: 'Mock interview', cost: 50 },
        { id: 4, name: 'Behaviorial interview questions', cost: 50 },
        { id: 5, name: 'Career guidance', cost: 50 },
        { id: 6, name: 'Study plan guidance', cost: 50 },
        { id: 7, name: 'General mentorship', cost: 50 }
    ];


    return (
        <div className="multiselect-demo">
            <div className="card">

                <InputText name="appointment_type" value={session != null ? JSON.stringify(session) : ''} hidden />
                <InputText name="appointment_topics" value={topcs != null ? JSON.stringify(topcs) : ''} hidden />
                <h5>How many sessions do you want?</h5>
                <SelectButton value={session} options={sessions} onChange={(e) => setSession(e.value)} optionLabel="name"  />

                <h5>What would you like to cover?</h5>
                <MultiSelect value={topcs}  options={topics} onChange={(e) => setTopics(e.value)} optionLabel="name" placeholder="Select a session" display="chip" />
            </div>
        </div>
    );
}

export default CoachBookingForm;

if (document.getElementById('coach-booking-form-fields')) {
    ReactDOM.render(<CoachBookingForm />, document.getElementById('coach-booking-form-fields'));
}
