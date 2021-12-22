const axios = require('axios');

// send request to server to save payment info
const savePaymentInfo = (paymentInfo) => {
    console.log(paymentInfo);
    return axios.post('/api/payment/save', paymentInfo)
        .then(res => {
            return res.data;
        })
        .catch(err => {
            console.log(err);
        });
}

export default savePaymentInfo;