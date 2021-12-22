
import React from 'react';
import ReactDOM from 'react-dom';
import { Card } from 'primereact/card';
import { Image } from 'primereact/image';
import { Button } from 'primereact/button';

import './HomeHero.css';

const HomeHero = () => {

    return (
        <div className="home-hero-wrapper">
            <div className="card grid min-h-full flex">
                <div className=" align-self-center col-12 md:col-6">
                    <h1 className="font-semibold line-height-2">
                        Tifunde
                    </h1>
                    <h2 className="font-semibold line-height-2 pb-4">
                        It's about you getting your dream job.
                    </h2>
                    <p>
                        One on One coaching from industry experts. We have seasoned
                        HR professionals and recruiters who can help you get the
                        job you want.
                    </p>
                    <a href="/register" className="no-underline">
                    <Button label="Get Started" className="p-button-raised p-button-secondary" />
                    </a>
                </div>
                <div className="col-12 md:col-6">
                    <Image className="w-full" src="images/tifunde-home-1.jpg" alt="Tifunde" />
                </div>
            </div>
            <div className="grid services-block py-6">
                <div className="col-12 md:col-3">
                    <Card>
                        CV Reviews
                    </Card>
                </div>
                <div className="col-12 md:col-3">
                    <Card>
                        Interview Practice
                    </Card>
                </div>
                <div className="col-12 md:col-3">
                    <Card>
                        Career Coaching
                    </Card>
                </div>
                <div className="col-12 md:col-3">
                    <Card>
                        Job Board
                    </Card>
                </div>
        
            </div>
        </div>
    );
}

export default HomeHero;

if (document.getElementById('home-hero')) {
    ReactDOM.render(<HomeHero />, document.getElementById('home-hero'));
}
