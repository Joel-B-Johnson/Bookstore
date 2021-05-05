<template>
	<div class="container">
		<h1>Address</h1>
        <div id="toppcontainer">
<<<<<<< HEAD
            <button v-on:click="displayAddresses">GetCurrentAddresses</button>
            <p> {{ currentAddr }} </p>
=======
            <button v-on:click="displayAddresses">Get current Addresses</button>
            {{ currentAddr }}
>>>>>>> c646fc7674e92d9d972d720b31a957cd95d0fb42
        </div>
        <div id="mainn">
		<form action="#" @submit.prevent="handleNewAddress">
			<div class="form_description">
			    <h2>New Address</h2>
		    </div>						
			<ul class="addressList">			
				<li class="form-row">
		            <label class="description" for="element_5">Address Line 1</label>
		            <div>
			            <input name="element_5" class="element text medium" type="text" maxlength="255"  v-model="adrformData.address_1"/> 
		            </div> 
		        </li>
                <li class="form-row">
                    <label class="description" for="element_2">Address Line 2</label>
                    <div>
                        <input name="element_2" class="element text medium" type="text" maxlength="255"  v-model="adrformData.address_2"/> 
                    </div>
                </li>
                <li class="form-row">
                    <label class="description" for="element_3">Zipcode</label>
                    <div>
                    <input name="element_3" class="element text medium" type="text" maxlength="255"  v-model="adrformData.zipcode"/> 
                    </div>
                    </li>
                <li class="form-row">
                    <label class="description" for="element_4">City </label>
                    <div>
                        <input name="element_4" class="element text medium" type="text" maxlength="255"  v-model="adrformData.city"/> 
                    </div> 
                </li>
                <li class="form-row">
                    <label class="description" for="element_6">State </label>
                    <div>
                        <select class="element select medium" id="element_6" name="element_6" v-model="adrformData.state_id"> 
                            <option value="" selected="selected"></option>
                            <option value="1" >Alabama</option>
                            <option value="2" >Alaska</option>
                            <option value="3" >Arizona</option>
                            <option value="4" >Arkansas</option>
                            <option value="5" >California</option>
                            <option value="6" >Colorado</option>
                            <option value="7" >Connecticut</option>
                            <option value="8" >Delaware</option>
                            <option value="9" >Florida</option>
                            <option value="10" >Georgia</option>
                            <option value="11" >Hawaii</option>
                            <option value="12" >Idaho</option>
                            <option value="13" >Illinois</option>
                            <option value="14" >Indiana</option>
                            <option value="15" >Iowa</option>
                            <option value="16" >Kansas</option>
                            <option value="17" >Kentucky</option>
                            <option value="18" >Louisiana</option>
                            <option value="19" >Maine</option>
                            <option value="20" >Maryland</option>
                            <option value="21" >Massachusetts</option>
                            <option value="22" >Michigan</option>
                            <option value="23" >Minnesota</option>
                            <option value="24" >Mississippi</option>
                            <option value="25" >Missouri</option>
                            <option value="26" >Montana</option>
                            <option value="27" >Nebraska</option>
                            <option value="28" >Nevada</option>
                            <option value="29" >New Hampshire</option>
                            <option value="30" >New Jersey</option>
                            <option value="31" >New Mexico</option>
                            <option value="32" >New York</option>
                            <option value="33" >North Carolina</option>
                            <option value="34" >North Dakota</option>
                            <option value="35" >Ohio</option>
                            <option value="36" >Oklahoma</option>
                            <option value="37" >Oregon</option>
                            <option value="38" >Pennsylvania</option>
                            <option value="39" >Rhode Island</option>
                            <option value="40" >South Carolina</option>
                            <option value="41" >South Dakota</option>
                            <option value="42" >Tennessee</option>
                            <option value="43" >Texas</option>
                            <option value="44" >Utah</option>
                            <option value="45" >Vermont</option>
                            <option value="46" >Virginia</option>
                            <option value="47" >Washington</option>
                            <option value="48" >West Virginia</option>
                            <option value="49" >Wisconsin</option>
                            <option value="50" >Wyoming</option>
                            </select>
                        </div> 
                    </li>
                    <li class="form-row">
                        <button class="btn btn-primary btn-blok" type="submit" name="submit" value="Submit">Submit</button>
                    </li>
			</ul>
		</form>	
        </div>
	</div>
</template>

<script>
export default {
    name: "Address",
    data() {
        return {
            currentAdr: '',
            adrformData:
            {
                user_email: localStorage.getItem("email"),
                address_1: "",
                address_2: "",
                zipcode: "",
                city: "",
                state_id: "",
            }
        };
    },
    methods:{
        displayAddresses() { 
            axios.get('api/assocAddresses', localStorage.getItem("email"))
        },
        handleNewAddress() {
            //Axios Post Request
            axios.post('api/newAddress', this.adrformData)
        }
    },
    
};
</script>

<style lang="scss">
    .addressList {
        list-style-type: none;
    }
    .description {
        font-weight: bold;
        padding-right: 20px;
        padding-left: 100px;
    }
</style>