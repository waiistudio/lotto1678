/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");
import VueSweetalert2 from "vue-sweetalert2";
import "./filter";
var moment = require("moment-timezone");
import Countdown from "vuejs-countdown";

// If you don't need the styles, do not connect
import "sweetalert2/dist/sweetalert2.min.css";
Vue.use(VueSweetalert2);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component("articles", require("./components/Articles.vue").default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
console.log("Hello");
const app = new Vue({
    el: "#app",
    components: { Countdown },
    data: {
        e_lottoname: "",
        e_lottoDate: "",
        e_id: "",
        e_DateExpireT: "",
        newItem: { lottoname: "", lottoDate: "", DateExpire: "", id: "1" },
        isActive: false,
        showModal: false,
        showadd: true,
        items: []
    },
    mounted: function mounted() {
        this.getVueItems();
    },

    methods: {
        getVueItems: function getVueItems() {
            var _this = this;

            axios.get("/getItem").then(function(response) {
                _this.items = response.data;
            });
        },

        setVal(val_id, val_lottoname, val_lottoDate, val_DateExpire) {
            this.e_id = val_id;
            this.e_lottoname = val_lottoname;
            this.e_lottoDate = val_lottoDate;
            this.e_DateExpireT = val_DateExpire;
            console.log(this.e_id);
            this.showadd = false;
        },

        createItem: function createItem() {
            var input = this.newItem;
            var _this = this;
            if (
                input["lottoname"] == "" ||
                input["lottoDate"] == "" ||
                input["lottoDate"] == ""
            ) {
                this.isActive = true;

                this.$swal("กรูณากรอกข้อมูลให้ครบทุกช่องค่ะ");
            } else {
                console.log(input);
                axios.post("/vueitems", input).then(function(response) {
                    _this.newItem = {
                        lottoname: "",
                        lottoDate: "",
                        DateExpire: "",
                        id: "1"
                    };
                    _this.getVueItems();
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "เพิ่มหวยเรียบร้อยค่ะ!",
                        showConfirmButton: false,
                        timer: 1500
                    });
                });
            }
        },

        editItem: function() {
            var i_val_1 = document.getElementById("e_id");
            var n_val_1 = document.getElementById("e_lottoname");
            var a_val_1 = document.getElementById("e_lottoDate");
            var p_val_1 = document.getElementById("e_DateExpireT");

            axios
                .post("/edititems/" + i_val_1.value, {
                    val_1: n_val_1.value,
                    val_2: a_val_1.value,
                    val_3: p_val_1.value
                })
                .then(response => {
                    this.getVueItems();
                    this.showModal = false;
                    this.showadd = true;
                });
            this.hasDeleted = true;
            window.location = "vue";
        },

        deleteItem: function deleteItem(item) {
            var _this = this;
            Swal.fire({
                title: "คุณต้องการลบหวยรายการนี้ใช่หรือไม่?",
                text: "โปรดตรวจสอบให้แน่ใจอีกครั้งหนึ่ง",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                cancelButtonText: "ยกเลิก",
                confirmButtonText: "ใช่ ฉันต้องการลบ"
            }).then(result => {
                if (result.value) {
                    Swal.fire("ลบสำเร็จ!", "success");
                    axios
                        .post("/deleteItem/" + item.id)
                        .then(function(response) {
                            _this.getVueItems();
                            window.location = "vue";
                        });
                }
            });
        }
    }
});
