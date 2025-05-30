/* @license GPL-2.0-or-later https://www.drupal.org/licensing/faq */
(function($,Drupal,drupalSettings){Drupal.behaviors.contentStats={attach:function(context,settings){if(context!==document||!drupalSettings.contentStats)return;$(document).ready(function(){const container=document.getElementById("content-stats-container");if(!container){console.error("Content stats container not found");return;}while(container.firstChild)container.removeChild(container.firstChild);const canvas=document.createElement("canvas");container.appendChild(canvas);const chartData=drupalSettings.contentStats;new Chart(canvas.getContext("2d"),{type:"bar",data:{labels:chartData.labels,datasets:[{label:"Content Items",data:chartData.data,backgroundColor:chartData.colors,borderColor:"rgba(200, 200, 200, 1)",borderWidth:1}]},options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{display:false},title:{display:true,text:"Content Type Distribution"}},scales:{y:{beginAtZero:true,ticks:{precision:0}}}}});});}};})(jQuery,Drupal,drupalSettings);;
(()=>{const toolbarState=sessionStorage.getItem('Drupal.toolbar.toolbarState')?JSON.parse(sessionStorage.getItem('Drupal.toolbar.toolbarState')):false;const classesToAdd=['toolbar-loading','toolbar-anti-flicker'];if(toolbarState){const {orientation,hasActiveTab,isFixed,activeTray,activeTabId,isOriented,userButtonMinWidth}=toolbarState;classesToAdd.push(orientation?`toolbar-${orientation}`:'toolbar-horizontal');if(hasActiveTab!==false)classesToAdd.push('toolbar-tray-open');if(isFixed)classesToAdd.push('toolbar-fixed');if(isOriented)classesToAdd.push('toolbar-oriented');if(activeTray){const styleContent=`
      .toolbar-loading #${activeTabId} {
        background-image: linear-gradient(rgba(255, 255, 255, 0.25) 20%, transparent 200%);
      }
      .toolbar-loading #${activeTabId}-tray {
        display: block; box-shadow: -1px 0 5px 2px rgb(0 0 0 / 33%);
        border-right: 1px solid #aaa; background-color: #f5f5f5;
        z-index: 0;
      }
      .toolbar-loading.toolbar-vertical.toolbar-tray-open #${activeTabId}-tray {
        width: 15rem; height: 100vh;
      }
     .toolbar-loading.toolbar-horizontal :not(#${activeTray}) > .toolbar-lining {opacity: 0}`;const style=document.createElement('style');style.textContent=styleContent;style.setAttribute('data-toolbar-anti-flicker-loading',true);document.querySelector('head').appendChild(style);if(userButtonMinWidth){const userButtonStyle=document.createElement('style');userButtonStyle.textContent=`
        #toolbar-item-user {min-width: ${userButtonMinWidth}px;}`;document.querySelector('head').appendChild(userButtonStyle);}}}document.querySelector('html').classList.add(...classesToAdd);})();;
