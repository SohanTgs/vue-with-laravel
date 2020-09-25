<template>
<div class="container">
<h2>Laravel & Vue.js submit form with <strong>Strong</strong> input field validation</h2> 
<form>
  <div class="form-row">
    <div class="col-md-4">
      <input type="text" v-model='name' class="form-control" placeholder="Name">
    <div class="alert alert-danger" v-if="!error == ''">
  {{error}}
    </div>
    </div>
    <div class="col-md-4">
      <input type="text" v-model='email' name="email" class="form-control" placeholder="Email">
  <div class="alert alert-danger" v-if="!error2 == ''">
  {{error2}}
    </div>
    </div>
    <div class="col">
      <input type="submit" value='submit' @click.prevent='submitBtn()' class="btn btn-success">
    </div>
  </div>
</form>
    </div>
</template>

<script>
    export default {

        data(){
            return{
             error:null,  
             error2:null,   
             name:'',
             email:'',
             reg: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,24}))$/, 
             reg2: /^[a-zA-Z_ ]*$/
            }
        },

        methods:{
            submitBtn(){
                this.error='';
                this.error2='';
                if(!this.name && !this.email){
                    this.error='Name field must be requred';
                    this.error2='Email field must be requred';
                    return false;
                }else if(!this.reg2.test(this.name) && !this.reg.test(this.email)){
                    this.error = "Please Enter Correct Name";
                    this.error2 = "Please Enter Correct Email";
                     return false;
                }
                if(!this.name){
                    this.error='The name field must be requred';
                    return false;
                 }else if(!this.reg2.test(this.name)){
                    this.error = "Please Enter Correct Name";
                    return false;
                 }
                if(!this.email){
                    this.error2='Email field must be requred';
                    return false;
                }else if(!this.reg.test(this.email)){
                    this.error2 = "Please Enter Correct Email";
                    return false;
                }
                if(this.name && this.email){
                    axios.post('/save',{name:this.name,email:this.email}).then(function(response){

                    });
                }
            }
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
