
import React, { useState, useEffect  } from 'react';
import ReactDOM from 'react-dom';
import { Menubar } from 'primereact/menubar';
import { Button } from 'primereact/button';

import './MainTopNav.css';

const MainTopNav = () => {
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
        <form action="/logout" method="post">
            <Button type="submit" label="Logout" className="p-button-danger" />
        </form>
    </div>;

    return (
        <div>
            <div className="card">
                <Menubar model={items} start={start} end={end} />
            </div>
        </div>
    );
}

export default MainTopNav;

if (document.getElementById('main-top-nav')) {
    ReactDOM.render(<MainTopNav />, document.getElementById('main-top-nav'));
}
