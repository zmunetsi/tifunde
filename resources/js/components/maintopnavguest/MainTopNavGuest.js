
import React from 'react';
import ReactDOM from 'react-dom';
import { Menubar } from 'primereact/menubar';
import { Button } from 'primereact/button';

import './MainTopNavGuest.css';

const MainTopNavGuest = () => {
    const items = [
        {
            label: 'Learn',
            items: [
                {
                    label: 'Courses',
                    icon: 'pi pi-fw pi-plus',
                    items: [
                        {
                            label: 'Bookmark',
                            icon: 'pi pi-fw pi-bookmark'
                        },
                        {
                            label: 'Video',
                            icon: 'pi pi-fw pi-video'
                        },

                    ]
                },

                {
                    label: 'Export',
                    icon: 'pi pi-fw pi-external-link'
                }
            ]
        },
        {
            label: 'Coaching',
            items: [
                {
                    label: 'Become a Coach',
                    icon: 'pi pi-fw pi-align-left'
                },
                {
                    label: 'Find a Coach',
                    icon: 'pi pi-fw pi-align-right'
                }

            ]
        },
        {
            label: 'Job Board',
            items: [
                {
                    label: 'Post a job',
                    icon: 'pi pi-fw pi-user-plus',

                },
                {
                    label: 'Find a job',
                    icon: 'pi pi-fw pi-user-minus',

                },

            ]
        },
        {
            label: 'Pricing',

        }
    ];

    const start = <img alt="logo" src="images/tifunde-logo.png" onError={(e) => e.target.src = 'https://www.primefaces.org/wp-content/uploads/2020/05/placeholder.png'} height="50" className="p-mr-2"></img>;
    const end = <div>
         <a href="/login" className="no-underline md:mx-6">
            <Button label="Sign In" className="p-button-primary p-button-raised" />
        </a>
        <a href="/register" className="no-underline">
            <Button label="Sign Up" className="p-button-secondary p-button-raised" />
        </a>

    </div>;

    return (
        <div>
            <div className="card">
                <Menubar model={items} start={start} end={end} />
            </div>
        </div>
    );
}

export default MainTopNavGuest;

if (document.getElementById('main-top-nav-guest')) {
    ReactDOM.render(<MainTopNavGuest />, document.getElementById('main-top-nav-guest'));
}
