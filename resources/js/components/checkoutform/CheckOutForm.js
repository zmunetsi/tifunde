
import React, { useState } from 'react';
import ReactDOM from 'react-dom';
import { Rating } from 'primereact/rating';

const CoachRating = () => {
    const [val1, setVal1] = useState(null);
    const [val2, setVal2] = useState(null);

    return (
        <div className="py-2">
            <Rating value={4} readOnly stars={5} cancel={false} />
        </div>
    )
}

export default CoachRating;

if (document.getElementById('coach-rating')) {
    ReactDOM.render(<CoachRating />, document.getElementById('coach-rating'));
}
