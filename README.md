<h1 align="center">LocatorX</h1>

<p align="center">
  <img src="https://img.shields.io/github/stars/MrHacker-X/LocatorX?style=for-the-badge&color=orange">
  <img src="https://img.shields.io/github/forks/MrHacker-X/LocatorX?color=cyan&style=for-the-badge&color=purple">
  <img src="https://img.shields.io/github/watchers/MrHacker-X/LocatorX?color=cyan&style=for-the-badge&color=purple">
  <img src="https://img.shields.io/github/issues/MrHacker-X/LocatorX?color=red&style=for-the-badge">
  <img src="https://img.shields.io/github/license/MrHacker-X/LocatorX?style=for-the-badge&color=blue">
<br>
  <img src="https://img.shields.io/badge/Author-Alex Butler-purple?style=flat-square">
  <img src="https://img.shields.io/badge/Open%20Source-Yes-cyan?style=flat-square">
  <img src="https://img.shields.io/badge/Written%20In-Python-blue?style=flat-square">
</p>

## Introduction
LocatorX is a powerful IP tracing tool with a web-based GUI that provides various features to trace and gather information about an IP address. It utilizes the data from multiple sources to provide detailed information about the IP address, including geographical location, ISP, organization, and more. This tool also includes a Google Maps integration to visualize the location on a map.

## Screenshot

![photo](https://i.ibb.co/x25SC9q/Screenshot-2023-06-21-13-05-09-057-edit-com-android-chrome.jpg)

## Installation
- To use LocatorX in Termux, follow the steps below:

1. Ensure you have Termux installed on your Android device.
2. Open Termux and execute the following command to install Git (if not already installed):

- ` apt install git -y `

3. Clone the LocatorX repository from GitHub:

- ` git clone https://github.com/MrHacker-X/LocatorX.git `

4. Change to the LocatorX directory:

- ` cd LocatorX `

5. Execute the installer script to install LocatorX in your Termux:

- ` bash install.sh `


## Features
- ### LocatorX provides the following features:

- **IP Tracing**: Trace and gather detailed information about an IP address.
- **Geographical Location**: Retrieve the continent, continent code, country, country code, region, region name, city, zip code, latitude, longitude, timezone, and offset of an IP address.
- **Currency Information**: Obtain the currency used in the country associated with the IP address.
- **ISP and Organization**: Identify the Internet Service Provider (ISP) and organization associated with the IP address.
- **Autonomous System (AS) Information**: Retrieve the AS number, AS name, and AS description.
- **Reverse DNS**: Display the reverse DNS entry for the IP address.
- **Mobile, Proxy, and Hosting Status**: Determine if the IP address is associated with a mobile device, proxy, or hosting service.
- **Google Maps Integration**: Visualize the geographical location of the IP address on Google Maps.

## Usage

1. Start LocatorX server by command ` locatorx start `
2. open ` http://localhost:8080 ` in your web browser
3. Enter the IP address you wish to trace when prompted.
4. The tool will gather information about the IP address and display it on the screen.
5. To view the location on Google Maps, Just scroll down

- How to stop server
1. Use ` locatorx stop ` command in your termux.

## Acknowledgements
- LocatorX utilizes data from various sources to provide IP tracing and location information. The tool is built on open-source technologies and incorporates the following:

- **Cloudflare**: IP and DNS-related information provided by Cloudflare, Inc.
- **APNIC**: Data from the APNIC (Asia-Pacific Network Information Centre) and Cloudflare DNS Resolver project.

## Disclaimer
- LocatorX is provided for educational and informational purposes only. The developers are not responsible for any misuse or illegal activities conducted using this tool. Use it responsibly and ensure you have the necessary permissions before tracing any IP address.

## Contributing
- Contributions to LocatorX are welcome! If you encounter any issues, have suggestions, or would like to add features, please open an issue or submit a pull request on the GitHub repository.

## License
- LocatorX is released under the [Boost Software License 1.0](https://github.com/MrHacker-X/LocatorX/blob/main/LICENSE). Please review the license before using or modifying this tool.

## Contact
- For any inquiries or questions, please contact [MrHacker-X](https://telegram.me/ethicxbot).
