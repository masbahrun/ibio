(window.webpackJsonp=window.webpackJsonp||[]).push([[9],{8:function(t,e,r){"use strict";r.r(e);var n=r(3),s=r.n(n);function i(t,e,r,n,s,i,o){try{var a=t[i](o),u=a.value}catch(t){return void r(t)}a.done?e(u):Promise.resolve(u).then(n,s)}var o={name:"RequestLinkType",data:function(){return{form:{description:""},submitting:!1}},methods:{show:function(){this.$refs.modal.show()},submit:function(){var t,e=this;return(t=s.a.mark((function t(){return s.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return e.submitting=!0,t.next=3,e.$inertia.post(route("feature-requests.link-type"),e.form,{preserveState:!0,preserveScroll:!0});case 3:e.$page.props.flash.success&&e.$refs.modal.hide(),e.submitting=!1;case 5:case"end":return t.stop()}}),t)})),function(){var e=this,r=arguments;return new Promise((function(n,s){var o=t.apply(e,r);function a(t){i(o,n,s,a,u,"next",t)}function u(t){i(o,n,s,a,u,"throw",t)}a(void 0)}))})()}}},a=r(1),u=Object(a.a)(o,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("v-modal",{ref:"modal"},[r("form",{on:{submit:function(e){return e.preventDefault(),t.submit(e)}}},[r("div",{staticClass:"p-4"},[r("v-title",{staticClass:"mb-5",attrs:{small:""}},[t._v("Let us know")]),t._v(" "),r("v-textarea",{attrs:{name:"description",error:t.$page.props.errors.requestLinkType&&t.$page.props.errors.requestLinkType.description,label:"Please let us know what we're missing 🧐"},model:{value:t.form.description,callback:function(e){t.$set(t.form,"description",e)},expression:"form.description"}})],1),t._v(" "),r("div",{staticClass:"px-4 py-3 flex justify-end"},[r("v-button",{attrs:{type:"secondary"},on:{click:function(e){return t.$refs.modal.hide()}}},[t._v("Cancel")]),t._v(" "),r("v-button",{staticClass:"ml-2",attrs:{loading:t.submitting},on:{click:t.submit}},[t._v("Submit")])],1)])])}),[],!1,null,null,null);e.default=u.exports}}]);