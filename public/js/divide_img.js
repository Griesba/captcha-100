//p est une classe
function getC(p) { 
    return document.getElementsByClassName(p)  
}

//p est un id
function getE(p){
    if (typeof p == 'object') 
        return p
    else
        return document.getElementById(p)
}

//p est un id
function getS(p){
    return getE(p).style
}

//p est un id
function getFocus(p) {           
    getE(p).focus()
}

/*function resolveAfter2Seconds() {
  return new Promise(resolve => {
    setTimeout(() => {
        resolve("resolved");
    }, 2000);
  });
}

async function asyncCall() {
  console.log('calling');
  const result = await resolveAfter2Seconds();
  console.log(result);
  // expected output: "resolved"
}

asyncCall();*/
