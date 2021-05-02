  // this script is used for development
function sleep(time){
  return new Promise((resolve)=>setTimeout(resolve,time)
)
}
sleep(1000).then(()=>{
window.location.reload();
})