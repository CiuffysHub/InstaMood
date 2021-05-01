process.env.IG_USERNAME = 'thetestshow';
process.env.IG_PASSWORD = 'theshowtest';

import { IgApiClient } from './node_modules/instagram-private-api';
import { readFile } from 'fs';
import { DateTime, Duration } from 'luxon';

import { StickerBuilder } from './node_modules/instagram-private-api/dist/sticker-builder';
import { promisify } from 'util';

const readFileAsync = promisify(readFile);

const ig = new IgApiClient();

async function login() {
  ig.state.generateDevice(process.env.IG_USERNAME);
  ig.state.proxyUrl = process.env.IG_PROXY;
  await ig.account.login(process.env.IG_USERNAME, process.env.IG_PASSWORD);
}

(async () => {
  await login();
  const path = './myPicture.mp4';
  const file = await readFileAsync(path);

  // these stickers are 'invisible' and not 're-rendered' in the app
  await ig.publish.story({
    file,
  });
})();