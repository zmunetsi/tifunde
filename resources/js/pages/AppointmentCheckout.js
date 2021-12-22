
import React, { useState } from 'react';
import ReactDOM from 'react-dom';
import { Card } from 'primereact/card';
import { Badge } from 'primereact/badge';
import { SelectButton } from 'primereact/selectbutton';
import { Button } from 'primereact/button';
import { Divider } from 'primereact/divider';
import savePaymentInfo from '../services/PaymentService';


const AppointmentCheckoutPage = () => {
    const [paymentOption, setPaymentOption] = useState({ label: 'Cash', value: 'cash' });

    const paymentOptions = [
        { label: 'Cash', value: 'cash', className: 'h-3rem my-4 col-12 md:col-6' },
        { label: 'Credit Card', value: 'creditCard', className: 'h-3rem my-4 col-12 md:col-6' },
    ];
    const itemTemplate = (option) => {

        if (option.label === 'Cash') {
            return (
                <div className="p-clearfix">
                    <span className="p-float-left">
                        <i className="pi pi-dollar"></i>
                    </span>
                    <span className="p-float-right"> {option.label}</span>
                </div>
            );
        }
        else {
            return (
                <div className="p-clearfix">
                    <span className="p-float-left">
                        <i className="pi pi-credit-card"></i>
                    </span>
                    <span className="p-float-right"> {option.label}</span>
                </div>
            );
        }
    }

    const handleCheckout = (e) => {
        e.preventDefault();
        const result = savePaymentInfo(paymentOption);
        console.log(result);
         
    }

    return (
        <Card>
            <div className='grid'>
                <div className='col-12 md:col-7'>
                    <h5><Badge value="1" className='p-badge-info'></Badge>   Complete Booking</h5>
                    <p>Payment Options:</p>
                    {/* payment options */}
                    <form id='checkout-form' onSubmit={handleCheckout}>
                        <div className='field'>
                            <SelectButton value={paymentOption} options={paymentOptions} itemTemplate={itemTemplate} onChange={(e) => setPaymentOption(e.value)} />
                        </div>
                        <div className='field'>
                            <Button label='Complete Booking' className='col-12 p-button-primary' />
                        </div>
                    </form>

                </div>
                <Divider layout="vertical"  />
                <div className='col-12 md:col-4'>
                    <h5><Badge value="2" className='p-badge-info'></Badge>   Appointment Details</h5>
                    <div className="text-blue-600 font-medium mb-1">Session 1</div>
                    <Badge value="Resume Review" className='p-badge-info'></Badge> 
                    <Badge value="Resume Review" className='p-badge-success'></Badge> 
                    <Badge value="Resume Review" className='p-badge-primary'></Badge>
                    <Divider layout="horizontal"  /> 
                    <div className="text-blue-600 font-medium mb-1">R100.00</div>

                </div>

            </div>
        </Card>
    )
}

export default AppointmentCheckoutPage;

if (document.getElementById('appointment-checkout-page')) {
    ReactDOM.render(<AppointmentCheckoutPage />, document.getElementById('appointment-checkout-page'));
}
