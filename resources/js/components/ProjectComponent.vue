<template>

<div class="panel panel-bordered">
    <form v-on:submit.prevent @keydown.enter.prevent role="form" class="form-edit-add" enctype="multipart/form-data">
        <div class="panel-body">
            <!-- title -->
            <div class="form-group  col-md-12 ">
                <label class="control-label" for="name">Title</label>
                <input type="text" class="form-control" v-model="title" required>
            </div>
            
            <!-- Menu Image -->
            <div class="form-group  col-md-12 ">
                                                
                 <label class="control-label" for="name">Menu Image <small>(upload JPEG [recommended])</small></label>
                    <div v-if="menuImageLocation" data-field-name="image">
                        <!-- <a href="#" class="voyager-x" style="position:absolute;"></a> -->
                        <img :src="'/storage/'+menuImageLocation" style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                    </div>
                    <input type="file" v-on:change="changeMenuImage" id="myfile">
            </div>

            <!-- Cover Image -->
            <div class="form-group  col-md-12 ">
                                                
                 <label class="control-label" for="name">Cover <small>(upload JPEG [recommended])</small></label>
                    <div v-if="coverImageLocation" data-field-name="image">
                        <!-- <a href="#" class="voyager-x" style="position:absolute;"></a> -->
                        <img :src="'/storage/'+coverImageLocation" style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                    </div>
                    <input type="file" v-on:change="changeImage" id="myfile">
            </div>

            <!-- Short Information -->
            <div class="form-group col-md-12">
                <label class="control-label" for="name">Short Information</label>
                <ckeditor :editor="editor" v-model="shortInformation" :config="editorConfig"></ckeditor>
            </div>

            <!-- Facts -->
            <div class="form-group col-md-12">
                <label class="control-label" for="name">Facts</label>
                <ckeditor :editor="editor" v-model="facts" :config="editorConfig"></ckeditor>
            </div>

           <!-- Description -->
            <div class="form-group col-md-12">
                <label class="control-label" for="name">Description</label>
                <ckeditor :editor="editor" v-model="description" :config="editorConfig"></ckeditor>
            </div>
            <!-- Frequently Asked Questions -->
            <div class="form-group h4 col-md-12">
                <strong>Frequently Asked Questions</strong>
            </div>
                    <div v-for="(item,index) in faqs" :key="index">
                        <div class="form-group  col-md-5 ">
                            <label class="control-label" for="name">Question</label>
                            <ckeditor :editor="editor" v-model="item.question" :config="editorConfig"></ckeditor>

                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="name">Answer</label>
                            <ckeditor :editor="editor" v-model="item.answer" :config="editorConfig"></ckeditor>
                        </div>
                        <div class="form-group col-md-1">
                            <label :for="'delete'+index">Delete</label>
                            <button type="button" @click="deleteFaq(index)" :id="'delete'+index" class="btn btn-danger"><span class="voyager-trash"></span></button>
                        </div>
                    </div>
                   <div class="form-group col-md-12">
                        <a href="#" class="btn btn-default" v-on:click.prevent="addFaq()">Add</a>
                    </div> 
            <!--  End of FAQs-->
            
            <!-- Our Impacts Field -->
                <div class="form-group h4 col-md-12">
                    <strong>Our Impacts</strong>
                </div> 
                <div class="container-fluid">
                <table class="table table-bordered">
                    <thead>
                        <tr class="d-flex">
                            <th class="col-md-5">Title</th>
                            <th class="col-md-2">Icon Image <small>(please upload .svg image)</small></th>
                            <th class="col-md-3">Total Count</th>
                            <th class="col-md-1">Subscript</th>
                            <th class="col-md-1">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(impactItem,impactIndex) in ourImpacts" :key="impactIndex" class="d-flex">
                            <td class="col-md-5"><input type="text" class="form-control" v-model="impactItem.title" required /></td>
                            <td class="col-md-2">
                                <div v-if="impactItem.iconLocation" data-field-name="image">
                                    <!-- <a href="#" class="voyager-x" style="position:absolute;"></a> -->
                                    <img :src="'/storage/'+impactItem.iconLocation" style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                </div>
                                <input type="file" v-on:change="changeImageOfOurImpact(impactIndex, $event)"></td>
                            <td class="col-md-3"><input v-model="impactItem.totalCount" class="form-control" type="number"></td>
                            <td class="col-md-1"><input class="form-control" type="text" v-model="impactItem.subScript"></td>
                            <td class="col-md-1"><button type="button" @click="deleteOurImpacts(impactIndex)" class="btn btn-danger"><span class="voyager-trash"></span></button></td>
                        </tr>
                     
                    </tbody>
                </table>
                </div>
                <div class="form-group col-md-12">
                        <a href="#" class="btn btn-default" v-on:click.prevent="addOurImpacts()">Add</a>
                </div>
            <!-- Our Impacts Field -->

            <!-- Our Contribution to global goals Field -->
                <div class="form-group h4 col-md-12">
                    <strong>OUR CONTRIBUTION TO GLOBAL GOALS</strong>
                    <small>(<a href="/admin/sdgs" target="_blank">Click Here</a> to add images)</small>
                </div>
                <div class="container-fluid">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="d-flex">
                                <th>Image Number</th>
                                <th>Image</th>
                                <th>Delete</th>
                            </tr> 
                        </thead>
                        <tbody>
                            <tr v-for="(sdgsItem,sdgsIndex) in sdgs" :key="sdgsIndex" class="d-flex">
                                <td><input class="form-control" type="number" v-model="sdgsItem.imageNumber"></td>
                                <td><div v-if="sdgsItem.imageNumber>0"><img :src="`/storage/sdgs/${sdgsItem.imageNumber}.png`" style="max-width:140px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;"></div></td>
                                <td><button type="button" @click="deleteSdgs(sdgsIndex)" class="btn btn-danger"><span class="voyager-trash"></span></button></td>
                            </tr>
                        </tbody>
                    </table>    
                </div> 
                <div class="form-group col-md-12">
                        <a href="#" class="btn btn-default" v-on:click.prevent="addSdgs()">Add</a>
                </div>   

            <!-- Slider Field  -->
                <div class="form-group h4 col-md-12">
                    <strong>Sliders</strong>
                </div>
                <div class="row container-fluid">
                    <div class="form-group col-md-4">
                        <label class="control-label" for="name">Unique Images ID <small>(<a href="/admin/multiple-images" target="_blank">click here</a> to add or see unique images id)</small></label>
                        <input @keydown.enter="generateImages" type="text" class="form-control" v-model="sliderID">
                        <a href="#" class="form-control btn btn-info" v-on:click.prevent="generateImages()">Check Images</a>
                    </div> 
                    
                </div>
                <div class="container-fluid" style="display:flex" v-if="generatedImages">
                    <div v-for="(generatedImagesItem,generatedImagesIndex) in generatedImages" :key="generatedImagesIndex">
                        <img :src="`/storage/${generatedImagesItem}`" style="max-width:140px; height:auto; clear:both; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                    </div>
                </div>   

                <!-- Testimonial Section  -->
                <div class="form-group h4 col-md-12">
                    <strong>Testimonials</strong>
                    <label for="name"><small>( go to media > testimonial and add image with proper name )</small></label>
                </div>
                <div class="container-fluid">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Body</th>
                                <th>Image</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(testimonialItem,testimonialIndex) in testimonial" :key="testimonialIndex">
                                <td><input class="form-control" type="text" v-model="testimonialItem.name"></td>
                                <td><input class="form-control" type="text" v-model="testimonialItem.designation"></td>
                                <td><textarea v-model="testimonialItem.body" rows="9" cols="40" class="form-control"></textarea></td>
                                <td>
                                    <label for="name"><small>Enter Image Name:</small></label>
                                    <input class="form-control" type="text" v-model="testimonialItem.imageName">
                                    <img v-if="testimonialItem.imageName" :src="`/storage/testimonial/${testimonialItem.imageName}`" @error="imgPlaceHolder" style="max-width:105px; height:auto; clear:both; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                </td>
                                <td>
                                    <button type="button" @click="deleteTestimonial(testimonialIndex)" class="btn btn-danger"><span class="voyager-trash"></span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <div class="form-group col-md-12">
                        <a href="#" class="btn btn-default" v-on:click.prevent="addTestimonial()">Add</a>
                </div>
                <!-- End Of Testimonial Section -->

                <!-- Testimonial Section  -->
                <div class="form-group h4 col-md-12">
                    <strong>Spotlight</strong>
                    <label for="name"><small>( go to media > spotlight and add image with proper name )</small></label>
                </div>
                <div class="container-fluid">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Body</th>
                                <th>Image</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody is="draggable" tag="tbody" v-model="spotlight">
                            <tr v-for="(spotlightItem,spotlightIndex) in spotlight" :key="spotlightIndex">
                                <td><input class="form-control" type="text" v-model="spotlightItem.name"></td>
                                <td><textarea v-model="spotlightItem.body" rows="9" cols="40" class="form-control"></textarea></td>
                                <td>
                                    <label for="name"><small>Enter Image Name:</small></label>
                                    <input class="form-control" type="text" v-model="spotlightItem.imageName">
                                    <img v-if="spotlightItem.imageName" :src="`/storage/spotlight/${spotlightItem.imageName}`" @error="imgPlaceHolder" style="max-width:105px; height:auto; clear:both; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                </td>
                                <td>
                                    <button type="button" @click="deleteSpotlight(spotlightIndex)" class="btn btn-danger"><span class="voyager-trash"></span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <div class="form-group col-md-12">
                        <a href="#" class="btn btn-default" v-on:click.prevent="addSpotlight()">Add</a>
                </div>
                <!-- End Of spotlight Section -->

        </div>
        <div class="panel-footer">
                <button @click="onSubmit" class="btn btn-primary save" :disabled = '!submitClickable'>Save</button>
                <a href="/admin/projects" class="btn btn-default">Back</a>
        </div>
    </form>
</div>

</template>


<script>
// for CK editor
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

// for Axios
import axios from 'axios';

import draggable from 'vuedraggable'


export default {
    components: {
            draggable,
        },
    props:[
        "edit",
        "content"
    ],
    data(){
        return {
            editor: ClassicEditor,
            editorConfig: {
                // The configuration of the editor.
            },
            id: '',
            title:'',
            coverImage:'',
            coverImageLocation:'',
            menuImage:'',
            menuImageLocation:'',
            shortInformation: '',
            facts: '',
            description : '',
            faqs: [
                {
                    question:'',
                    answer:''
                }
            ],
            ourImpacts: [
                {
                    title:'',
                    iconImage:'',
                    totalCount:'',
                    subScript: '',
                    iconLocation:''
                }
            ],
            sdgs: [
                {
                    imageNumber: '',
                }
            ],
            sliderID: '',
            testimonial: [
                {
                    name:'',
                    designation:'',
                    body:'',
                    imageName:'',
                }
            ],
            spotlight: [
                {
                    name:'',
                    body:'',
                    imageName:'',
                }
            ],
            generatedImages: '',
            submitClickable:1,
            method:'post',
        }
    },
    created(){

        if(this.edit){
            console.log(this.content)
            this.title = this.content.title;
            this.description = this.content.description;
            this.shortInformation = this.content.short_info;
            this.facts = this.content.facts;
            this.faqs = JSON.parse(this.content.faqs);
            if(this.content.our_impacts){
                this.ourImpacts = JSON.parse(this.content.our_impacts);
            }
            if(this.content.sdgs){
                this.sdgs = JSON.parse(this.content.sdgs);
            }
            if(this.content.testimonial){
                this.testimonial = JSON.parse(this.content.testimonial);
            }
            if(this.content.spotlight){
                this.spotlight = JSON.parse(this.content.spotlight);
            }
            this.sliderID = this.content.slider_id;
            this.id = this.content.id;
            this.coverImageLocation = this.content.coverImage;
            this.menuImageLocation = this.content.menuImage;
            
            // set method to put for editing which will be forward to controller after
            this.method = 'put';
        }
    },
    methods: {
        onSubmit()
        {
            // generating Short Form
            // var words = this.title.split(/\s+/);
            // var shortTitle = '';
            // words.forEach(item => {
            //     shortTitle = shortTitle + item[0];
            // });
            // console.log(shortTitle);
            // return true;
            this.submitClickable = false;
            var myPointer = this;
            const config = {
                headers: { 'content-type' : 'multipart/form-data' }
            }

            let formData = new FormData();
            formData.append('title',this.title);
            formData.append('shortInformation',this.shortInformation);
            formData.append('description',this.description);
            formData.append('facts',this.facts);
            formData.append('faqs',JSON.stringify(this.faqs));
            formData.append('method',this.method);
            formData.append('coverImage',this.coverImage);
            formData.append('menuImage',this.menuImage);
            formData.append('id',this.id);
            formData.append('slider_id',this.sliderID);
            formData.append('testimonial',JSON.stringify(this.testimonial));
            formData.append('spotlight',JSON.stringify(this.spotlight));
            formData.append('ourImpacts',JSON.stringify(this.ourImpacts));
            formData.append('sdgs',JSON.stringify(this.sdgs));
            this.ourImpacts.forEach((item,index) => {
                formData.append(`ourImpactIconImage[${index}]`,item.iconImage);
            });
            axios.post('/admin/projects',formData,config).then(
                function (response){
                    toastr.success('Form Created');
                    console.log(response);

                    if(response.data=='done'){
                    window.location.replace("/admin/projects");
                    console.log(response);
                    }

                }
            ).catch(function (error){
                myPointer.submitClickable = true;
                toastr.error(error);
            })

        },


        // generate Slider Images
        generateImages(){
            var myPointer = this;
            if(this.sliderID){
                axios.get('/generateImages', { params:{ sliderID: this.sliderID } }).then(
                    (response)=>{
                        console.log(response);
                        myPointer.generatedImages = response.data;
                    }
                ).catch(
                    (error)=>{
                        console.log(error);
                    }
                )
            }
            else{
                console.log('Empty ID');
            }
            
        },
        // imageUpload
        changeImage(event){
            console.log(event.target.files[0]);
            this.coverImage = event.target.files[0];
        },

        // menuImageUpload
        changeMenuImage(event){
            console.log(event.target.files[0]);
            this.menuImage = event.target.files[0];
        },

        // imageUpload of OurImpact
        changeImageOfOurImpact(impactIndex,event){
            console.log(event.target.files[0]);
            this.ourImpacts[impactIndex].iconImage = event.target.files[0];
        },

        // FAQ adding function
        addFaq(){
            this.faqs.push({question:'',answer:''});
        },

        // FAQ deleting function
        deleteFaq(index){
            this.faqs.splice(index,1);
        },

        addOurImpacts(){
            this.ourImpacts.push(                
                        {
                            title:'',
                            iconImage:'',
                            totalCount:'',
                            subScript: '',
                            iconLocation: '',
                        });
        },

        // Our Contributions adding and deleting function
        addSdgs(){
            this.sdgs.push({ imageNumber:''})
        },
        deleteSdgs(sdgsIndex){
            this.sdgs.splice(sdgsIndex,1)
        },

        // FAQ deleting function
        deleteOurImpacts(impactIndex){
            this.ourImpacts.splice(impactIndex,1);
        },

        addTestimonial(){
            this.testimonial.push({
                    name:'',
                    designation:'',
                    body:'',
                    imageName:'',
                });
        },
        deleteTestimonial(testimonialIndex){
            this.testimonial.splice(testimonialIndex,1);
        },
        addSpotlight(){
            this.spotlight.push({
                    name:'',
                    body:'',
                    imageName:'',
                });
        },
        deleteSpotlight(spotlightIndex){
            this.spotlight.splice(spotlightIndex,1);
        },
        imgPlaceHolder(e){
            e.target.src="/admin-images/no-image-found.jpg";
        },
    }
}
</script>


<style>
small{
    font-weight: 400;
}
</style>