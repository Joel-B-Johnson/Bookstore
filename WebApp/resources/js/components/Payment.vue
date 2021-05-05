<template>
    <h1>Existing Cards</h1>
    <div class="creditCardForm">
    <div class="heading">
        <h1>Add a New Card</h1>
    </div>
    <div class="payment">
        <form action="#" @submit.prevent="addNewCard">
            <div class="form-group owner">
                <label for="owner">Card Provider</label>
                <select v-model="formData.card_provider" name="element_4"> 
                    <option value="" selected="selected"></option>
                    <option value="1" >Visa</option>
                    <option value="2" >American Express</option>
                    <option value="3" >Discover</option>
                </select>
            </div> 
            <div class="form-group CVV">
                <label for="cvv">CVV</label>
                <input
                    maxlength="3"
                    inputmode="numeric"
                    class="form-control"
                    id="cvv">
            </div>
            <div class="form-group" id="card-number-field">
                <label for="cardNumber">Card Number</label>
                <input
                    v-model="formData.card_number" 
                    inputmode="numeric"
                    pattern="[0-9\s]{13,19}"
                    autocomplete="cc-number"
                    maxlength="19"
                    placeholder="xxxx xxxx xxxx xxxx"
                    class="form-control"
                    id="cardNumber">
            </div>
            <div class="form-group" id="expiration-date">
                <label>Expiration Date</label>
                <select v-model="exp_date1">
                    <option value="01">January</option>
                    <option value="02">February </option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select v-model="exp_date2">
                    <option value="21"> 2021</option>
                    <option value="22"> 2022</option>
                    <option value="23"> 2023</option>
                    <option value="24"> 2024</option>
                    <option value="25"> 2025</option>
                    <option value="26"> 2026</option>
                </select>
            </div>
            <div class="form-group" id="pay-now">
                <button type="submit" class="btn btn-primary btn-blok">Confirm</button>
            </div>
        </form>
    </div>
</div>
</template>

<script>
export default {
    name: "Payment",
    data() {
        return {
            exp_date1: "",
            exp_date2: "",
            formData: {
                user_id: localStorage.getItem("id"),
                card_provider: "",
                card_number: "",
                exp_date: "",
            },
        };
    },
    methods:{
        addNewCard() {
            this.formData.exp_date+= this.exp_date1;
            this.formData.exp_date+= "/";
            this.formData.exp_date+= this.exp_date2;
            axios({ method: 'post', url: 'api/newCard', data: this.formData })
            .then((response) => {
                console.log("yay")
            })
            .catch(function (error) {
                if (error.response) {
                    document.getElementById("passError").style.display="block";
                    console.log(error.response.data);
                    console.log(error.response.status);
                    console.log(error.response.headers);
                } else if (error.request) {
                    console.log(error.request);
                } else {
                    console.log("Error", error.message);
                }
            });
        },
    },
};
</script>

<style lang="scss">
.creditCardForm {
    max-width: 700px;
    background-color: #fff;
    margin: 100px auto;
    overflow: hidden;
    padding: 25px;
    color: #4c4e56;
}
.creditCardForm label {
    width: 100%;
    margin-bottom: 10px;
}
.creditCardForm .heading h1 {
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    color: #4c4e56;
}
.creditCardForm .payment {
    float: left;
    font-size: 18px;
    padding: 10px 25px;
    margin-top: 20px;
    position: relative;
}
.creditCardForm .payment .form-group {
    float: left;
    margin-bottom: 15px;
}
.creditCardForm .payment .form-control {
    line-height: 40px;
    height: auto;
    padding: 0 16px;
}
.creditCardForm .owner {
    width: 63%;
    margin-right: 10px;
}
.creditCardForm .CVV {
    width: 35%;
}
.creditCardForm #card-number-field {
    width: 100%;
}
.creditCardForm #expiration-date {
    width: 49%;
}
.creditCardForm #credit_cards {
    width: 50%;
    margin-top: 25px;
    text-align: right;
}
.creditCardForm #pay-now {
    width: 100%;
    margin-top: 25px;
}
.creditCardForm .payment .btn {
    width: 100%;
    margin-top: 3px;
    font-size: 24px;
    background-color: #2ec4a5;
    color: white;
}
.creditCardForm .payment select {
    padding: 10px;
    margin-right: 15px;
}
.transparent {
    opacity: 0.2;
}
@media(max-width: 650px) {
    .creditCardForm .owner,
    .creditCardForm .CVV,
    .creditCardForm #expiration-date,
    .creditCardForm #credit_cards {
        width: 100%;
    }
    .creditCardForm #credit_cards {
        text-align: left;
    }
}
</style>
