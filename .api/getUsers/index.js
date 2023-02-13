const cookieName = 'UsersCount';
const fs = require('fs');

if (!document.cookie.includes(`${cookieName}=`)) {
let storageNum = 0;
storageNum = parseInt(fs.readFileSync('UsersCount', 'utf8'));
storageNum++;
fs.writeFileSync('UsersCount', storageNum);
document.cookie = `${cookieName}=1; expires=${new Date(Date.now() + (86400 * 31 * 1000)).toUTCString()}; path=/`;
if (location.search.includes('traffic=show')) {
    document.write(fs.readFileSync('UsersCount', 'utf8'));
} else {
    document.write('An error occurred.');
}
} else {
    if (location.search.includes('traffic=show')) {
    document.write(fs.readFileSync('UsersCount', 'utf8'));
    } else {
    document.write('An error occurred.');
    }
    }
    
    