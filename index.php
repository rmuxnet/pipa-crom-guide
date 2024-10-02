### Full Guide: Unlocking Bootloader, Flashing Custom Recovery, and Flashing Custom ROM on Xiaomi Pad 6 (HyperOS)

This guide covers unlocking the bootloader on a **Xiaomi Pad 6** running **HyperOS**, flashing a custom recovery (like LineageOS or crDroid recovery), and using **ADB sideload** to flash a custom ROM.

### Prerequisites

Ensure you have the following ready before starting:

1. **Xiaomi Pad 6 (HyperOS)**
2. **A computer** (Windows/Linux/Mac) with **ADB and Fastboot** installed. You can download it [here](https://developer.android.com/studio/releases/platform-tools).
3. **Mi Unlock Tool**: Download from [Mi Unlock Tool](https://en.miui.com/unlock/).
4. **USB cable** (the original one or a good quality cable for stable data transfer).
5. **Custom Recovery** (LineageOS or crDroid recovery `.img` file).
6. **Custom ROM** you wish to install, in `.zip` format.

### Part 1: Unlocking the Bootloader on Xiaomi Pad 6 (HyperOS)

1. **Enable Developer Options**:
   - Go to **Settings** > **About Device**.
   - Tap **MIUI/HyperOS version** 7 times until you see the “You are now a developer” message.

2. **Enable OEM Unlocking and USB Debugging**:
   - Go back to **Settings** > **Additional Settings** > **Developer Options**.
   - Enable **OEM Unlocking** and **USB Debugging**.

3. **Link Mi Account**:
   - In **Developer Options**, tap **Mi Unlock Status**.
   - Log in with your **Mi Account** and bind the account to your device.

4. **Boot into Fastboot Mode**:
   - Power off your device.
   - Hold down **Volume Down + Power** simultaneously until you see the Fastboot logo.

5. **Unlock the Bootloader using Mi Unlock Tool**:
   - Download and open the **Mi Unlock Tool** on your PC.
   - Sign in with your **Mi Account**.
   - Connect the Xiaomi Pad 6 to your PC using the USB cable.
   - In Mi Unlock Tool, click **Unlock**. The tool will unlock the bootloader in a few minutes.
   
   > **Note:** Xiaomi sometimes imposes a waiting period before unlocking the bootloader. If you encounter a message like "168 hours waiting time," you’ll need to wait before trying again.

6. **Reboot the Device**:
   - Once the unlock process is complete, the device will reboot, and all data will be erased.

### Part 2: Flashing Custom Recovery (LineageOS/CrDroid) via Fastboot

1. **Download the Custom Recovery (LineageOS or crDroid)**:
   - Find the `.img` file of the custom recovery (e.g., `lineage-recovery.img` or `crdroid-recovery.img`).
   
2. **Boot into Fastboot Mode**:
   - Power off your Pad 6.
   - Hold **Volume Down + Power** to boot into Fastboot mode again.

3. **Flash the Custom Recovery**:
   - Connect your device to your computer via USB.
   - Open a terminal/command prompt where ADB and Fastboot are installed.
   - Use the following command to flash the recovery to the **boot partition** (since many recoveries are now flashed via the boot slot):
     ```bash
     fastboot flash boot recovery.img
     ```
   - Replace `recovery.img` with the actual name of the recovery file you downloaded (e.g., `lineage-recovery.img`).

4. **Reboot into Recovery**:
   - After flashing the recovery, reboot into the newly installed custom recovery by using this command:
     ```bash
     fastboot reboot recovery
     ```

### Part 3: Flashing a Custom ROM via ADB Sideload

Once the custom recovery is installed, you can flash a custom ROM like **LineageOS**, **crDroid**, or others via ADB Sideload.

1. **Download the Custom ROM**:
   - Download the desired ROM `.zip` file for your device from the official ROM page (LineageOS, crDroid, etc.).

2. **Boot into Custom Recovery**:
   - If you’re not already in recovery, boot into it by holding **Volume Up + Power** after powering off the device.

3. **Wipe Data/Factory Reset**:
   - In the recovery, navigate to **Wipe** and perform a **Factory Reset**. This will ensure a clean installation of the new ROM.

4. **Prepare ADB Sideload**:
   - In the custom recovery (LineageOS, crDroid, etc.), go to **Advanced** > **ADB Sideload** and swipe to start the ADB sideload process.

5. **Sideload the ROM via ADB**:
   - Connect your Xiaomi Pad 6 to your PC via USB.
   - Open a terminal/command prompt on your computer where the custom ROM `.zip` is saved.
   - Run the following command to sideload the ROM:
     ```bash
     adb sideload customrom.zip
     ```
   - Replace `customrom.zip` with the actual filename of the custom ROM you downloaded (e.g., `lineageos.zip`).

6. **Wait for the Flash to Complete**:
   - The ROM will now be installed via ADB sideload. This may take a few minutes, and you will see the progress in both the recovery and the terminal.

7. **Wipe Cache and Dalvik** (Optional but recommended):
   - After the installation completes, go back to the recovery’s main menu.
   - Navigate to **Wipe** and select **Cache/Dalvik** to clear the cache.

8. **Reboot to System**:
   - Once done, navigate back to the main recovery menu and select **Reboot to System**.
   - Your device will now boot into the freshly installed custom ROM.

### Troubleshooting and Important Notes

- **Bootloop After Flashing**: If your device gets stuck in a boot loop, boot into recovery and perform a factory reset or wipe data/cache. Then attempt the installation again.
- **Waiting for Device in ADB**: Make sure USB Debugging is enabled, and that your computer has the correct drivers for your Xiaomi Pad 6. Ensure you’ve authorized the connection on the device.
- **Stuck in Recovery Mode**: If you can’t boot into the system, try flashing the custom ROM again or restoring the stock ROM via Fastboot.

---

### Summary

1. Unlock the bootloader with Mi Unlock Tool.
2. Flash custom recovery (LineageOS or crDroid) via `fastboot flash boot recovery.img`.
3. Use ADB Sideload in the custom recovery to install the custom ROM.

Following these steps will allow you to unlock your Xiaomi Pad 6, flash a custom recovery, and sideload custom ROMs. Make sure to backup your data, as unlocking and flashing will erase everything on your device.
