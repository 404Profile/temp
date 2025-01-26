import{K as p,m as h,j as e,$ as j}from"./app-CG0T4jI9.js";import{T as n,I as m}from"./TextInput-Ci5ewWy5.js";import{I as l}from"./InputLabel-RW9cKK0d.js";import{P as v}from"./PrimaryButton-CLmOkqcU.js";import{z as y}from"./transition-9IhsO5Ub.js";function F({mustVerifyEmail:o,status:c,className:d=""}){const a=p().props.auth.user,{data:s,setData:r,patch:u,errors:i,processing:x,recentlySuccessful:f}=h({name:a.name,email:a.email}),g=t=>{t.preventDefault(),u(route("profile.update"))};return e.jsxs("section",{className:d,children:[e.jsxs("header",{children:[e.jsx("h2",{className:"text-lg font-medium text-gray-900 dark:text-gray-100",children:"Информация о профиле"}),e.jsx("p",{className:"mt-1 text-sm text-gray-600 dark:text-gray-400",children:"Обновите информацию о профиле и адрес электронной почты своей учетной записи."})]}),e.jsxs("form",{onSubmit:g,className:"mt-6 space-y-6",children:[e.jsxs("div",{children:[e.jsx(l,{htmlFor:"name",value:"Имя"}),e.jsx(n,{id:"name",className:"mt-1 block w-full",value:s.name,onChange:t=>r("name",t.target.value),required:!0,isFocused:!0,autoComplete:"name"}),e.jsx(m,{className:"mt-2",message:i.name})]}),e.jsxs("div",{children:[e.jsx(l,{htmlFor:"email",value:"Email"}),e.jsx(n,{id:"email",type:"email",className:"mt-1 block w-full",value:s.email,onChange:t=>r("email",t.target.value),required:!0,autoComplete:"username"}),e.jsx(m,{className:"mt-2",message:i.email})]}),o&&a.email_verified_at===null&&e.jsxs("div",{children:[e.jsxs("p",{className:"mt-2 text-sm text-gray-800 dark:text-gray-200",children:["Ваш адрес электронной почты непроверен.",e.jsx(j,{href:route("verification.send"),method:"post",as:"button",className:"rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800",children:"Нажмите здесь, чтобы повторно отправить письмо для проверки."})]}),c==="verification-link-sent"&&e.jsx("div",{className:"mt-2 text-sm font-medium text-green-600 dark:text-green-400",children:"На ваш адрес электронной почты отправлена новая ссылка для проверки."})]}),e.jsxs("div",{className:"flex items-center gap-4",children:[e.jsx(v,{disabled:x,children:"Сохранить"}),e.jsx(y,{show:f,enter:"transition ease-in-out",enterFrom:"opacity-0",leave:"transition ease-in-out",leaveTo:"opacity-0",children:e.jsx("p",{className:"text-sm text-gray-600 dark:text-gray-400",children:"Сохранено."})})]})]})]})}export{F as default};
