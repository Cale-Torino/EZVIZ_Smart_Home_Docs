# Firmware

A list of firmware files for the EZVIZ devices.

You can upgrade or downgrade via the Ezviz PC Studio.

1) Install Ezviz PC Studio, go to the root directory of Ezviz Studio in your PC and find the folder named *config*.
2) Copy the file named `AppConfig.ini` in the folder of *config* to desktop. Open `AppConfig.ini` in desktop.
3) Add the following command which highlighted in yellow in `AppConfig.ini` and save before exiting:

```
[LocalOperation]
Show=1
```
4) Copy the `AppConfig.ini` file in desktop to folder of *config* and overlay the old one. 

Refresh the device page in EZVIZ Studio or reopen the Studio, then you will see the *Advanced* under *All my devices*, press on it and enter verification code.



For some cameras like the C3A, nothing will work and you must downgrade firmware, that's how to do it:

Install Ezviz Studio and enable advance settings as described above.

In advanced settings, look for *Device type* and try to obtain an older version, you can try searching by the following URL prefix.

https://usdownload.ezvizlife.com/device/Enter-Device-Type/2.0/Enter-Device-Type.dav

For example:

https://usdownload.ezvizlife.com/device/CS-C3A-B0-1C2WPMFBR/2.0/CS-C3A-B0-1C2WPMFBR.dav

In Ezviz Studio, advanced settings, under System Maintenance, there is an option to flash the .dav from a PC.












