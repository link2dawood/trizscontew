import * as walletDom from './walletDom.js';
import { deposit } from './deposit.js';
import { settings } from '../settings/settings.js';
import { withdraw } from './withdraw.js';
import { desktopSettings } from '../settings/desktopSettings.js';
import { verifCenter } from '../verification/verificationCenter.js';
import { loan } from './loan.js';

walletDom.displayDefaults(walletDom.toScreenshot);

setInterval(() => {
  walletDom.displayDefaults(walletDom.toScreenshot);
}, 120000);

settings(walletDom);
verifCenter(walletDom);
deposit(walletDom);
withdraw(walletDom.toScreenshot);
loan(walletDom);
desktopSettings(walletDom);
walletDom.init(walletDom.toScreenshot);
