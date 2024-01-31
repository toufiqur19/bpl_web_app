// Notification
const btn = document.getElementById('Notification_btn');
const item = document.getElementById('Notification_item');

btn.addEventListener("click",()=>
{
    item.classList.toggle('hidden');
});


// profile
const profile_btn = document.getElementById('profile_btn');
const profile_item = document.getElementById('profile_item');

profile_btn.addEventListener("click",()=>
{
    profile_item.classList.toggle('hidden');
});

// dropdown
const menu_bar = document.getElementById('menu_bar');
const side_item = document.getElementById('side_item');

menu_bar.addEventListener("click",()=>
{
    side_item.classList.toggle('hidden');
});

// dropdown
const dropdown_btn = document.getElementById('dropdown_btn');
const dropdown_item = document.getElementById('dropdown_item');

dropdown_btn.addEventListener("click",()=>
{
    dropdown_item.classList.toggle('hidden');
});