<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello, WebVR! • A-Frame</title>
    <meta name="description" content="Hello, WebVR! • A-Frame">
    <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script> 
   

  </head>
  <body>
    
    <a-scene background="color: #0f0000">

      <a-entity position="-1 -1 2">
        <a-camera></a-camera>
      </a-entity>

     
      <a-assets>
        <a-asset-item id="crate-obj" src="culito.obj"></a-asset-item>
        <a-asset-item id="crate-mtl" src="culito.mtl"></a-asset-item>
      </a-assets>
      
      
      
      <!-- Using the asset management system. -->
      
      <a-obj-model src="#crate-obj" mtl="#crate-mtl"   position="-1 -1 -4"  rotation="0 80 0" animation="property: rotation; to: 0 360 0; loop: true; dur: 10000" > </a-obj-model>
    
     

      <a-cylinder position="3 0 -3" radius="0.5" height="3" color="#605F5F" shadow></a-cylinder>
      <a-cylinder position="-4.8 0 -3" radius="0.5" height="3" color="#605F5F" shadow></a-cylinder>
      <a-sphere position="3 2 -3" radius="0.8" color="#F9F7F6 "  rotation="45 90 180" shadow ></a-sphere>
      <a-sphere position="-4.8 2 -3" radius="0.8" color="#F9F7F6  "  rotation="45 90 180" shadow ></a-sphere>
      <a-plane position="-1 -4 -10" rotation="-90 0 0" width="20" height="15" color="#281001" shadow></a-plane>
      
    </a-scene>
