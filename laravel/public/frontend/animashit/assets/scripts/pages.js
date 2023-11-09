    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    async function doAjax(url, params, success) {
        try {
            return await $.ajax({
                url: url,
                type: 'POST',
                dataType: 'json',
                data: params,
                success: success
            });
        } catch (error) {
            console.log(error);
        }
    }

    async function getCountriesList(params, success) {
        try {
            let url = baseUrl + "/api/services/getCountriesList";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getCountriesDetail(params, success) {
        try {
            let url = baseUrl + "/api/services/getCountriesDetail";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getGigsList(params, success) {
        try {
            let url = baseUrl + "/api/services/getGigsList";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getGigsDetail(params, success) {
        try {
            let url = baseUrl + "/api/services/getGigsDetail";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getGigFeaturesList(params, success) {
        try {
            let url = baseUrl + "/api/services/getGigFeaturesList";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getGigFeaturesDetail(params, success) {
        try {
            let url = baseUrl + "/api/services/getGigFeaturesDetail";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getGigMediasList(params, success) {
        try {
            let url = baseUrl + "/api/services/getGigMediasList";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getGigMediasDetail(params, success) {
        try {
            let url = baseUrl + "/api/services/getGigMediasDetail";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getGigPackagesList(params, success) {
        try {
            let url = baseUrl + "/api/services/getGigPackagesList";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getGigPackagesDetail(params, success) {
        try {
            let url = baseUrl + "/api/services/getGigPackagesDetail";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getGigPackageExtrasList(params, success) {
        try {
            let url = baseUrl + "/api/services/getGigPackageExtrasList";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getGigPackageExtrasDetail(params, success) {
        try {
            let url = baseUrl + "/api/services/getGigPackageExtrasDetail";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getGigPackageFeaturesList(params, success) {
        try {
            let url = baseUrl + "/api/services/getGigPackageFeaturesList";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getGigPackageFeaturesDetail(params, success) {
        try {
            let url = baseUrl + "/api/services/getGigPackageFeaturesDetail";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getGigPackageHeadList(params, success) {
        try {
            let url = baseUrl + "/api/services/getGigPackageHeadList";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getGigPackageHeadDetail(params, success) {
        try {
            let url = baseUrl + "/api/services/getGigPackageHeadDetail";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getGigPackageMediasList(params, success) {
        try {
            let url = baseUrl + "/api/services/getGigPackageMediasList";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getGigPackageMediasDetail(params, success) {
        try {
            let url = baseUrl + "/api/services/getGigPackageMediasDetail";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getPackagesList(params, success) {
        try {
            let url = baseUrl + "/api/services/getPackagesList";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getPackagesDetail(params, success) {
        try {
            let url = baseUrl + "/api/services/getPackagesDetail";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getPagesList(params, success) {
        try {
            let url = baseUrl + "/api/services/getPagesList";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getPagesDetail(params, success) {
        try {
            let url = baseUrl + "/api/services/getPagesDetail";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getPortfoliosList(params, success) {
        try {
            let url = baseUrl + "/api/services/getPortfoliosList";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getPortfoliosDetail(params, success) {
        try {
            let url = baseUrl + "/api/services/getPortfoliosDetail";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getPortfolioMediasList(params, success) {
        try {
            let url = baseUrl + "/api/services/getPortfolioMediasList";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getPortfolioMediasDetail(params, success) {
        try {
            let url = baseUrl + "/api/services/getPortfolioMediasDetail";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getProfilesList(params, success) {
        try {
            let url = baseUrl + "/api/services/getProfilesList";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getProfilesDetail(params, success) {
        try {
            let url = baseUrl + "/api/services/getProfilesDetail";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getSchedulesList(params, success) {
        try {
            let url = baseUrl + "/api/services/getSchedulesList";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getSchedulesDetail(params, success) {
        try {
            let url = baseUrl + "/api/services/getSchedulesDetail";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getScheduleItemsList(params, success) {
        try {
            let url = baseUrl + "/api/services/getScheduleItemsList";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getScheduleItemsDetail(params, success) {
        try {
            let url = baseUrl + "/api/services/getScheduleItemsDetail";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getScheduleItemTypesList(params, success) {
        try {
            let url = baseUrl + "/api/services/getScheduleItemTypesList";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getScheduleItemTypesDetail(params, success) {
        try {
            let url = baseUrl + "/api/services/getScheduleItemTypesDetail";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getScheduleStatusList(params, success) {
        try {
            let url = baseUrl + "/api/services/getScheduleStatusList";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getScheduleStatusDetail(params, success) {
        try {
            let url = baseUrl + "/api/services/getScheduleStatusDetail";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getSettingsList(params, success) {
        try {
            let url = baseUrl + "/api/services/getSettingsList";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getSettingsDetail(params, success) {
        try {
            let url = baseUrl + "/api/services/getSettingsDetail";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };


    async function getYoutubeUrl(params, success) {
        try {
            let url = baseUrl + "/api/services/getYoutubeUrl";
            let data = await doAjax(url, params, success);
            return data;
        } catch (error) {
            console.log(error);
        }
    };
