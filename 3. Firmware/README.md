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

---

For some cameras like the C3A, nothing will work and you must downgrade firmware, that's how to do it:

Install Ezviz Studio and enable advance settings as described above.

In advanced settings, look for *Device type* and try to obtain an older version, you can try searching by the following URL prefix.

https://usdownload.ezvizlife.com/device/Enter-Device-Type/2.0/Enter-Device-Type.dav

For example:

https://usdownload.ezvizlife.com/device/CS-C3A-B0-1C2WPMFBR/2.0/CS-C3A-B0-1C2WPMFBR.dav

In Ezviz Studio, advanced settings, under System Maintenance, there is an option to flash the .dav from a PC.

I have also included a few firmware files here.

`http` and `https` works for fetching the files

- CS-C3A
    - https://usdownload.ezvizlife.com/device/CS-C3A-B0-1C2WPMFBR/2.0/CS-C3A-B0-1C2WPMFBR.dav
- CS-C2mini
    - https://usdownload.ezvizlife.com/device/CS-C2mini-31WFR/CS-C2mini-31WFR.dav
- CS-C1HC
    - https://usdownload.ezvizlife.com/device/CS-C1HC-E0-1E2WF-KJDS/2.0/CS-C1HC-E0-1E2WF-KJDS.dav
- LV-PDB1630
    - https://usdownload.ezvizlife.com/device/LV-PDB1630-U/2.0/LV-PDB1630-U.dav
- CS-CV248
    - https://usdownload.ezvizlife.com/device/CS-CV248-A0-32WFR/2.0/CS-CV248-A0-32WFR.dav
    - https://eudownload.ezvizlife.com/device/CS-CV248-A0-32WFR/2.0/CS-CV248-A0-32WFR.dav
- CS-TY1
    - https://sgpdownload.ezvizlife.com/device/CS-TY1-B0-1G2WF/2.0/CS-TY1-B0-1G2WF.dav
- CS-CV310
    - https://eudownload.ezvizlife.com/device/CS-CV310-A0-1B2WFR/2.0/CS-CV310-A0-1B2WFR.dav
- CS-H3c
    - https://eudownload.ezvizlife.com/device/CS-H3c-R100-1K3WKFL/2.0/CS-H3c-R100-1K3WKFL.dav
- CS-C1T
    - https://eudownload.ezvizlife.com/device/CS-C1T-A0-1D2WF/2.0/CS-C1T-A0-1D2WF.dav
- 
- 
- 


Change CN virgin version to chad EN version: https://ipcamtalk.com/threads/converting-ezviz-c6tc-from-chinese-to-english.42386/



You can also find firmware temp files in the `device_upgrade_temp` folder located in your ezviz install dir e.g `C:\ezviz\Ezviz Studio` but beware they get removed quickly...