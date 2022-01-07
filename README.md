## ReactNativeWeb Browser Mobile Wrapper
A simple web page that loads a a ReactNativeWeb application in an iFrame, giving the appearance that it running on an mobile device.

### Example
![Example](docs/example.jpg?raw=true "Example")

### Usage

Update header to reflect application:
```html
	<head>
		<meta name="description" content="XDP App :: Parcel Tracking">
		...
		<meta property="og:url" content="https://xdp.co.uk">
		<meta property="og:title" content="XDP">
		<meta property="og:description" content="Parcel Tracking">
		<title>XDP App :: Parcel Tracking</title>
		...
	</head>
```

Update the links for the AppStore and PlayStore accordingly:
```html
	<a class="store-btn" href="https://apps.apple.com/gb/app/xdp/id1485292140">
		<img src="assets/img/app-store.png" alt="App Store">
	</a>
	<a class="store-btn" href="https://play.google.com/store/apps/details?id=uk.co.sysx.xdp.deliveryx">
		<img src="assets/img/google-play.png" alt="Google Play">
	</a>
```

Update the iFrame to target the ReactNativeWeb application:
```html
	<div class="iphone-screenshot">
		<iframe id="phone-iframe" src="https://app.xdp.co.uk" frameBorder="0" />
	</div>
```
