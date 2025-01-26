import{a as i,m as h,j as s}from"./app-CG0T4jI9.js";import{T as n,I as c}from"./TextInput-Ci5ewWy5.js";import{I as d}from"./InputLabel-RW9cKK0d.js";import{P as g}from"./PrimaryButton-CLmOkqcU.js";import{z as v}from"./transition-9IhsO5Ub.js";function k({className:u=""}){const p=i.useRef(),l=i.useRef(),{data:e,setData:a,errors:t,put:w,reset:o,processing:x,recentlySuccessful:f}=h({current_password:"",password:"",password_confirmation:""}),j=r=>{r.preventDefault(),w(route("password.update"),{preserveScroll:!0,onSuccess:()=>o(),onError:m=>{m.password&&(o("password","password_confirmation"),p.current.focus()),m.current_password&&(o("current_password"),l.current.focus())}})};return s.jsxs("section",{className:u,children:[s.jsxs("header",{children:[s.jsx("h2",{className:"text-lg font-medium text-gray-900 dark:text-gray-100",children:"Обновить пароль"}),s.jsx("p",{className:"mt-1 text-sm text-gray-600 dark:text-gray-400",children:"Убедитесь, что ваша учетная запись использует длинный и случайный пароль, чтобы оставаться в безопасности."})]}),s.jsxs("form",{onSubmit:j,className:"mt-6 space-y-6",children:[s.jsxs("div",{children:[s.jsx(d,{htmlFor:"current_password",value:"Текущий пароль"}),s.jsx(n,{id:"current_password",ref:l,value:e.current_password,onChange:r=>a("current_password",r.target.value),type:"password",className:"mt-1 block w-full",autoComplete:"current-password"}),s.jsx(c,{message:t.current_password,className:"mt-2"})]}),s.jsxs("div",{children:[s.jsx(d,{htmlFor:"password",value:"Новый пароль"}),s.jsx(n,{id:"password",ref:p,value:e.password,onChange:r=>a("password",r.target.value),type:"password",className:"mt-1 block w-full",autoComplete:"new-password"}),s.jsx(c,{message:t.password,className:"mt-2"})]}),s.jsxs("div",{children:[s.jsx(d,{htmlFor:"password_confirmation",value:"Подтвердите пароль"}),s.jsx(n,{id:"password_confirmation",value:e.password_confirmation,onChange:r=>a("password_confirmation",r.target.value),type:"password",className:"mt-1 block w-full",autoComplete:"new-password"}),s.jsx(c,{message:t.password_confirmation,className:"mt-2"})]}),s.jsxs("div",{className:"flex items-center gap-4",children:[s.jsx(g,{disabled:x,children:"Сохранить"}),s.jsx(v,{show:f,enter:"transition ease-in-out",enterFrom:"opacity-0",leave:"transition ease-in-out",leaveTo:"opacity-0",children:s.jsx("p",{className:"text-sm text-gray-600 dark:text-gray-400",children:"Сохранено."})})]})]})]})}export{k as default};
